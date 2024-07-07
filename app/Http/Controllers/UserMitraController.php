<?php

namespace App\Http\Controllers;

use App\Models\UserMitra;
use Illuminate\Http\Request;

class UserMitraController extends Controller
{
    public function index()
    {
        $mitras = UserMitra::all();
        return view('viewMitra', ['mitras' => $mitras]);
    }

    // Display the specified resource.
    public function show($id)
    {
        $mitra = UserMitra::find($id);
        return view('detailMitra', ['mitra'=>$mitra]);
    }

}
