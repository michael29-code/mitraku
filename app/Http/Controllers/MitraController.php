<?php

namespace App\Http\Controllers;
use App\Models\Mitra;
use App\Models\Pengajuan;
use PDF;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MitraController extends Controller
{
    //USER
    public function createMitra1(){
        return view('roles.user.create_mitra.createMitra1');
    }

    public function createMitra2(){
        return view('roles.user.create_mitra.createMitra2');
    }    

    public function createMitra3(){
        return view('roles.user.create_mitra.createMitra3');
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

    // public function mitra(): View
    // {
    //     return view("roles.user.mitra.mitra",["mitras" => Mitra::all()]);
    // }

    public function mitra()
    {
        $mitras = Mitra::all();
        return view('roles.user.mitra.mitra', ['mitras' => $mitras]);
    }

    public function show($id)
    {
        $mitra = Mitra::find($id);
        return view('roles.user.mitra.mitra', ['mitra'=>$mitra]);
    }

    //ADMIN
    public function index(){
        $mitras = Mitra::all();
        return view('roles.admin.mitra.viewMitra', compact('mitras'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        if ($search) {
            $mitras = Mitra::where('name', 'LIKE', "%{$search}%")->get();
        } else {
            $mitras = Mitra::all();
        }

        return view('roles.admin.mitra.viewMitra', compact('mitras'));
    }
    
    public function toggleBlock($id){
        $mitra = Mitra::find($id);
        if($mitra->isBlocked == 0){
            $mitra->isBlocked = 1;
        } else {
            $mitra->isBlocked = 0;
        }
        $mitra->save();
        return redirect()->back();
    }
}