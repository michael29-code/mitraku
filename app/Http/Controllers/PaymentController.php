<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Pengajuan;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{



    public function index()
    {
        $userId = Auth::user()->id;
        $transactions = Transaction::where('user_id', $userId)->get();
        
        return view('roles.user.advertise.transactionIndex', compact('transactions'));
    }

    public function show()
    {
        $advertisements= Advertisement::all();
        $selected = Advertisement::where('id',1)->get();
        $user = User::where('id', Auth::user()->id)->get();
        return view('roles.user.advertise.paymentPage', compact('advertisements', 'selected','user'));
    }

    public function pay(Request $request){

        $data = $request->all();
        $user = Auth::user()->id;
        $transaction = Transaction::create([
            'user_id' => $user,
            'advertise_id' => $data['advertise_id'],
            'gross_amount' => $data['gross_amount'],
            'status' => 'pending',
        ]);        
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['gross_amount'],
            ),
            'user_details' => array(
                'username' => Auth::user()->username,
                'email' => Auth::user()->email,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaction->snap_token = $snapToken;
        $transaction->save();

        return redirect('/checkout/' . $transaction->id);
    }

    public function checkout(Transaction $transaction)
    {
        return view('roles.user.advertise.checkout', compact('transaction'));
    }
    public function success(Transaction $transaction)
    {
        $transaction->status = 'success';
        $transaction->save();
        return view('roles.user.advertise.successPayment');
    }
}
