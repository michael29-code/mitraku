<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function viewCategoryAdmin() {
        $data = Category::all();
        return view('viewCategoryAdmin')->with('data', $data);
    }
    
    public function addCategoryAdmin() {
        return view('addCategoryAdmin');
    }
    
    public function deleteCategoryAdmin() {
        return view('deleteCategoryAdmin');
    }
    
    public function updateCategoryAdmin() {
        return view('updateCategoryAdmin');
    }
    

    public function store(Request $request)
    {
        Session::flash('jenisKategori', $request->jenisKategori);

        $request->validate([
            'jenisKategori'=>'required'
        ],[
            'jenisKategori'=>'Jenis Kategori wajib diisi'
        ]);

        $data=[
            'jenisKategori'=>$request->input('jenisKategori')
        ];

        Category::create($data);

        return redirect()->route('view_category')->with('success', 'Berhasil menambah kategori');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $jenisKategori)
    {
        $data = Category::where('jenisKategori', $jenisKategori)->first();
        return view('manage-category/update-category')->with('data', $data);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $jenisKategori)
    {
        $request->validate([
            'jenisKategori'=>"required"
        ],[
            'jenisKategori.required'=> 'Jenis Kategori Wajib diisi'
        ]);

        $data = [
            'jenisKategori'=>$request->input('jenisKategori')
        ];

        Category::where('jenisKategori', $jenisKategori)-> update($data);
        return redirect('/manage-category')->with('success', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jenisKategori)
    {
        $data = Category::where('jenisKategori', $jenisKategori)->first();
        Category::where('jenisKategori', $jenisKategori)->delete();
        return redirect('/view-category')->with('success', 'Berhasil hapus data');
    }
}
