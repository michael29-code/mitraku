<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class RegisterController extends Controller
{
    public function signUpPage(){
        return view('signUpPage');
    }

    public function signUpStore(Request $request){
        $incomingFields = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            // 'username' => ['required', 'min:5', 'max:255', Rule::unique('users', 'name')],
            // 'dob' => ['required'],
            'email' => ['required', 'email:dns', 'unique:users'],
            // 'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255'],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        User::create($incomingFields);
        $request->session()->flash('success', 'Sign Up Successful!');

        return redirect('/home');
    }
}
