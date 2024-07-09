<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PengajuanController extends Controller
{
        
    public function create(){
        return view('roles.user.mitra.viewFormPengajuan');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'userId' => 'required',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'kategori' => 'required',
            'contact_number' => 'required',
            'mitra_details' => 'required|string|max:1000',
            'start_time' => 'required|date',
            'duration' => 'required',
        ]);

        Pengajuan::create($validatedData);

        $pdf = FacadePdf::loadview('pdfTemplate2', $validatedData);
        return $pdf->download('test.pdf');
    }
    public function download($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        // dd($pengajuan);
        $pdf = FacadePdf::loadView('pdfTemplate', compact('pengajuan'));
        return $pdf->download('pengajuan-details.pdf');
    }

    public function edit(Pengajuan $id){
        return view('roles.user.mitra.editFormPengajuan',["pengajuan" => $id]);
    }

    public function update(Request $request, Pengajuan $pengajuan)
    {

        $rules = [
            'name' => 'required',
            'address' => 'required',
            'kategori' => 'required',
            'contact_number' => 'required',
            'mitra_details' => 'required',
            'start_time' => 'required',
            'duration' => 'required',
        ];
        
        $validatedData = $request->validate($rules);
        Pengajuan::where('id', $pengajuan->id)->update($validatedData);
        return redirect('/view-pengajuan');
    }
    public function view(): View
    {
        $pengajuans = Pengajuan::where('user_id', Auth::id())->get();

        return view('roles.user.mitra.viewPengajuan', compact('pengajuans'));
    }

    public function destroy(Pengajuan $pengajuan)
    {
        Pengajuan::destroy($pengajuan->id);
        return redirect('/view-pengajuan');
    }
}
