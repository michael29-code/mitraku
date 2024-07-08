<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('roles.user.profile.profile', compact('user'));
    }

    public function change_password(Request $request)
    {
        // $user = User::find($request->id);
        // $user->password = bcrypt($request->password);
        // $user->save();
        // return redirect()->back()->with('success','');
        
        
        // Update the password
        $inFil = $request->validate([
            'password'=> ['required', 'min:8'],
        ]);
        // $inFil = bcrypt($inFil);

        $user = Auth::user();
        $user->update($inFil);

        auth()->logout();
        return redirect('/');
    }
}