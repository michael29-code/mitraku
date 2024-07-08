<?php

namespace App\Http\Controllers;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MitraController extends Controller
{
    public function createMitra(){
        return view('roles.user.create_mitra.createMitra');
    }

    public function addDetailMitra(){
        return view('roles.user.create_mitra.addDetailMitra');
    }    

    public function addDetailingMitra(){
        return view('roles.user.create_mitra.addDetailingMitra');
    }   

    public function storeMitra(Request $request)
    {
        // Validate the request
        $request->validate([
            'namaMitra' => 'required|string|max:255',
            'lokasiMitra' => 'required|string|max:255',
            'kategoriMitra' => 'required|string|max:255',
            // Add other fields as necessary
        ]);

        // Create the Mitra record
        Mitra::create($request->except(['_token', 'submit']));

        // Fetch the updated list of Mitra records
        $mitra = Mitra::all();

        // Return the view with the updated list of Mitra records
        return view('roles.admin.mitra.viewMitra', compact('mitra'));
    }

    public function mitra(): View
    {
        return view("roles.user.mitra.mitra",["mitras" => Mitra::all()]);
    }
}