<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PengajuanController extends Controller
{
        
    public function create(Request $request){
        return view('roles.user.mitra.viewFormPengajuan');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'kategori' => 'required',
            'contact_number' => 'required',
            'mitra_details' => 'required|string|max:1000',
            'start_time' => 'required|date',
            'duration' => 'required',
        ]);

        Pengajuan::create($validatedData);

        // $pdf = FacadePdf::loadview('pdfTemplate2', $validatedData);
        // return $pdf->download('test.pdf');
        return redirect('/view-pengajuan')->with('success', 'Pengajuan has been submited');
    }

    public function edit(Pengajuan $id){
        return view('roles.user.mitra.editFormPengajuan',["pengajuan" => $id]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'kategori' => 'required',
            'contact_number' => 'required',
            'mitra_details' => 'required|string|max:1000',
            'start_time' => 'required|date',
            'duration' => 'required',
        ]);

        $item = Pengajuan::findOrFail($id);
        $item->name = $request->input('name');
        $item->address = $request->input('address');
        $item->kategori = $request->input('kategori');
        $item->contact_number = $request->input('contact_number');
        $item->mitra_details = $request->input('mitra_details');
        $item->start_time = $request->input('start_time');
        $item->duration = $request->input('duration');
        $item->save();

        return redirect('/view-pengajuan')->with('success', 'Pengajuan has been succesfully edited');
    }
    public function view(): View
    {
        $pengajuans = Pengajuan::where('user_id', Auth::id())->paginate(10);

        return view('roles.user.mitra.viewPengajuan', ["pengajuans"=>$pengajuans]);
    }

    public function destroy($id)
    {
        Pengajuan::destroy($id);
        return redirect('/view-pengajuan')->with('success', 'Pengajuan has been deleted');
    }
}
