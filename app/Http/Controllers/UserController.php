<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        if ($search) {
            $users = User::where('name', 'LIKE', "%{$search}%")->get();
        } else {
            $users = User::all();
        }

        return view('roles.admin.block.viewUser', compact('users'));
    }

    public function show($id)
    {
        $user = Auth::user();
        return view('roles.user.profile.profile', compact('user'));
    }
}
