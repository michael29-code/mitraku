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
        return view('roles.general.signuppage');
    }

    public function signUpStore(Request $request)
    {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'date_of_birth' => ['required', 'before: 5 years ago'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255', 'confirmed'],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $incomingFields['level'] = 2;
        $incomingFields['address'] = ' ';
        $incomingFields['image'] = '';
        $incomingFields['isBlocked'] = 0;

        User::create($incomingFields);
        $request->session()->flash('success', 'Sign Up Successful!');

        return redirect('/sign-in');
    }

    public function signInPage()
    {
        return view('roles.general.signInPage');
    }

    public function authentication(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($incomingFields)) {
            // dd(Auth::user()->level);
            $request->session()->regenerate();
            if (Auth::user()->level == 1) {
                return redirect()->intended(route('view-user-admin'));
            }
            return redirect()->intended(route('home'));
        }
        return redirect()->back()->withInput()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('sign-in');
    }

}
