<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function signUpPage()
    {
        return view('signUpPage');
    }

    public function signUpStore(Request $request)
    {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            // 'username' => ['required', 'min:5', 'max:255', Rule::unique('users', 'name')],
            // 'dob' => ['required'],
            'email' => ['required', 'email:dns', 'unique:users'],
            // 'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255'],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $incomingFields['level'] = 2;

        User::create($incomingFields);
        $request->session()->flash('success', 'Sign Up Successful!');

        return redirect('/home');
    }

    public function signInPage()
    {
        return view('signInPage');
    }

    public function authentication(Request $request)
    {
        $incomingFields = $request->validate([
            //     'username' => ['required', 'min:5'],
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        // if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
        //     $request->session()->regenerate();
        // }
        
        if(Auth::attempt($incomingFields)){
                $request->session()->regenerate();
                return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Login Failed');
    }
}
