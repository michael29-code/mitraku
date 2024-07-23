<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Pengajuan;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Carbon\Month;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $transactions = Transaction::where('user_id', $userId)->paginate(10);
        
        return view('roles.user.advertise.transactionIndex', compact('transactions'));
    }

    public function show($id)
    {
        $advertisements= Advertisement::all();
        $selected = Advertisement::where('id',$id)->get();
        $user = User::where('id', Auth::user()->id)->get();
        return view('roles.user.advertise.paymentPage', compact('advertisements', 'selected','user'));
    }

    public function pay(Request $request){
        $data = $request->all();
        $user = Auth::user()->id;
        
        $monthPlus = Advertisement::where('id',$data['advertise_id'])->get();
        
        $month = Carbon::now()->addMonth($monthPlus[0]->period);
        
        $activeSubscription = Transaction::join('users', 'transactions.user_id', '=', 'users.id')
        ->where('transactions.user_id', $user)
        ->where('transactions.status', 'active')->exists();
        // dd($activeSubscription);
        
        
        if ($activeSubscription) {
            return redirect('/payment/'. $request->advertise_id)->with('error', 'You already have an active subscription.');
        }
        
        $transaction = [
            'user_id' => $user,
            'advertise_id' => $data['advertise_id'],
            'gross_amount' => $data['gross_amount'],
            'starts_at' => Carbon::now(),
            'ends_at' => $month,
        ];        
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
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
        
        $transaction['snap_token'] = $snapToken;
        
        $request->session()->put('transaction', $transaction);

        return redirect('/checkout');
    }

    public function checkout()
    {        
        return view('roles.user.advertise.checkout');
    }
    public function success()
    {
        return view('roles.user.advertise.successPayment');
    }

    public function storeTransaction(Request $request)
    {
        // Validate the request
        $request->validate([
            'user_id' => 'required|integer',
            'advertise_id' => 'required|integer',
            'gross_amount' => 'required|numeric',
            'starts_at' => 'required|date',
            'ends_at' => 'required|date',
            'status' => 'required|string',
            'transaction_result' => 'required'
        ]);

        try {
            $transaction = Transaction::create([
                'user_id' => $request->user_id,
                'advertise_id' => $request->advertise_id,
                'gross_amount' => $request->gross_amount,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'status' => $request->status,
            ]);

            return response()->json(['success' => true, 'transaction' => $transaction]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    public function checkExpired()
    {
        $subscriptions = Transaction::where('status', 'active')->get();
        foreach ($subscriptions as $subscription) {
            if ($subscription->isExpired()) {
                $subscription->update(['status' => 'expired']);
            }
        }
    }
}
