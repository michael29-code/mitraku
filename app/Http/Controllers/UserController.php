<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('roles.user.profile.profile', compact('user'));
    }
}
