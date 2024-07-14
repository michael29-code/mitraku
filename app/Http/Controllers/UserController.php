<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    // View User Admin
    public function index(){
        $users = User::where('level', 2)->get();
        return view('roles.admin.block.viewUser', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $users = User::query()
            ->where('level', 2)
            ->where('username', 'LIKE', "%{$search}%")
            ->get();

        return view('roles.admin.block.viewUser', compact('users'));
    }
    
    public function toggleBlock($id){
        $user = User::find($id);
        // $user->isBlocked = 1;
        // dd($user);
        if($user->isBlocked == 0){
            $user->isBlocked = 1;
        } else {
            $user->isBlocked = 0;
        }
        $user->save();
        return redirect()->back();
    }


    // Profile User
    public function show(Request $request)
    {
        $user = Auth::user();
        return view('roles.user.profile.profile', compact('user'));
    }

    public function change_password(Request $request)
    {


        //Validate Password
        $inFil = $request->validate([
            'password'=> 'required|Min:8',
        ]);


        // Update Password
        $user = Auth::user();
        $user->update($inFil);

        auth()->logout();
        return redirect('/');
    }

    public function uploud_image(Request $request)
    {   
        $user = Auth::user();

        $validate = $request->validate([
            'image' => 'image|max:1024|',
        ]);

        if($request->has('image')){
            $imagePath = $request->file('image')->store('profile-images', 'public');
            $validate ['image'] = $imagePath;

            Storage::disk('public')->delete($user->image);
        }
        $user->update($validate);

        return redirect('/profile-user');
    }
}
