<?php

namespace App\Http\Controllers;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function create(){
        return view('createMitra');
    }

    public function store(Request $request){
        $mitra = Mitra::all();
        Mitra::create($request->except(['_token', 'submit']));
        return view('viewMitra', compact(['mitra']));
    }
}