<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



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
        $user = User::find($id);
        return view('roles.user.profile.profile', compact('user'));
    }

    public function toggleBlock($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->status = $user->status == 'Active' ? 'Blocked' : 'Active';
            $user->save();

            return redirect()->route('users.index')->with('success', 'User status updated successfully.');
        }

        return redirect()->route('users.index')->with('error', 'User not found.');
    }
}
