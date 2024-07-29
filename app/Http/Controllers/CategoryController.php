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
        $data = Category::orderBy('created_at', 'DESC')->get();
        return view('roles.admin.category.viewCategoryAdmin')->with('data', $data);
    }
    
    public function addCategoryAdmin() {
        return view('roles.admin.category.addCategoryAdmin');
    }
    
    public function updateCategoryAdmin($jenisKategori) {
        $data = Category::where('jenisKategori', $jenisKategori)->first();
        return view('roles.admin.category.updateCategoryAdmin', ['data' => $data]);
    }
    
    public function store(Request $request)
    {
        Session::flash('jenisKategori', $request->jenisKategori);

        $request->validate([
            'jenisKategori'=>'required|unique:categories'
        ]);
        // [
            // 'jenisKategori'=>'Jenis Kategori wajib diisi'
        // ]);

        $data=[
            'jenisKategori'=>$request->input('jenisKategori')
        ];

        Category::create($data);

        $message = "Category \"" . $request->jenisKategori . "\" has been created successfully";

        return redirect()->route('view-category-admin')->with('success', $message);
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

        $category = Category::where('jenisKategori', '=', $jenisKategori);
        $category->update($data);
        $message = 'Berhasil Update! '.$jenisKategori.' -> '.$data['jenisKategori'];
        return redirect('/view-category')->with('success', $message);
        // return redirect('/view-category')->with('success', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($jenisKategori)
    {
        $category = Category::where('jenisKategori', $jenisKategori)->first();
        if ($category) {
            $category->delete();
        }
        $message = "\"" . $jenisKategori . "\" has been deleted successfully";
        return redirect()->route('view-category-admin')->with('success', $message);
    }
}
