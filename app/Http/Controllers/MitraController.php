<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Mitra;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function createStep1()
    {
        return view('roles.user.create_mitra.createMitra1');
    }

    public function storeStep1(Request $request)
    {
        $validatedData = $request->validate([
            'mitraName' => 'required|string|max:255',
            'mitraOverview' => 'required|string',
            'mitraYear' => 'required|integer',
            'mitraWebsite' => 'nullable|string',
            'mitraCategory' => 'nullable|string',
            'image_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_cover')) {
            $image = $request->file('image_cover');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image_cover'] = $imageName;
        }
        $mitra = new Mitra($validatedData);
        $mitra->user_id = Auth::id();
        $mitra->contactName = 'a';
        $mitra->contactEmail = 'a@gmail.com';
        $mitra->contactPhoneNumber = '081234567';
        $mitra->mitra_details = 'lorem';
        $mitra->galeri = isset($mitra['galeri']) ? json_encode($mitra['galeri']) : null;
        $mitra->latest_rating_and_certificate = $mitra['latest_rating_and_certificate'] ?? null;
        $mitra->awards = $mitra['awards'] ?? null;
        $mitra->address = $mitra['address'] ?? null;
        $mitra->image_map = $mitra['image_map'] ?? null;
        $mitra->isBlocked = 0;
        // dd($mitra);
        $mitra->save();
        $request->session()->put('mitra_id', $mitra->id);
        return redirect()->route('create-mitra-2')
            ->with('success', 'Step 1 completed successfully');
    }


    public function createStep2()
    {
        return view('roles.user.create_mitra.createMitra2');
    }

    public function storeStep2(Request $request)
    {
        $mitraId = $request->session()->get('mitra_id');
        $mitra = Mitra::find($mitraId);

        $validatedData = $request->validate([
            'mitra_details' => 'required|string',
            'galeri.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contactName' => 'required|string|max:255',
            'contactEmail' => 'required|email',
            'contactPhoneNumber' => 'required|string|max:20',
        ]);

        $galleryImages = [];
        if ($request->hasFile('galeri')) {
            foreach ($request->file('galeri') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);
                $galleryImages[] = $imageName;
            }
        }

        $validatedData['galeri'] = json_encode($galleryImages);
        $mitra->update($validatedData);

        return redirect()->route('create-mitra-3')
            ->with('success', 'Step 2 completed successfully');
    }


    public function createStep3()
    {
        return view('roles.user.create_mitra.createMitra3');
    }

    public function storeStep3(Request $request)
    {
        $mitraId = $request->session()->get('mitra_id');
        $mitra = Mitra::find($mitraId);

        $validatedData = $request->validate([
            'latest_rating_and_certificate' => 'nullable|string',
            'awards' => 'nullable|string',
            'address' => 'required|string|max:255',
            'image_map' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);

        if ($request->hasFile('image_map')) {
            $locationMap = $request->file('image_map');
            $locationMapName = time() . '_' . $locationMap->getClientOriginalName();
            $locationMap->move(public_path('images'), $locationMapName);
            $validatedData['image_map'] = $locationMapName;
        }

        $mitra->update($validatedData);
        $request->session()->forget('mitra_id');
        return redirect()->route('home')->with('success', 'Mitra created successfully!');
    }

    public function mitra()
    {
        $mitras = Mitra::paginate(4);
        return view('roles.user.mitra.mitra', compact('mitras'));
    }


    public function show($id)
    {
        $mitra = Mitra::find($id);
        return view('roles.user.mitra.detailMitra', ['mitra' => $mitra]);
    }

    //ADMIN
    public function index()
    {
        $mitras = Mitra::all();
        return view('roles.admin.mitra.viewMitra', compact('mitras'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $mitras = Mitra::where('mitraName', 'like', '%'.$searchTerm.'%')->paginate(10);
        return view('roles.user.mitra.mitra', compact('mitras', 'searchTerm'));
    }

    public function searchAdmin(Request $request)
    {
        $searchTerm = $request->input('search');
        $mitras = Mitra::where('mitraName', 'LIKE', "%{$searchTerm}%")->get();

        return view('roles.admin.mitra.viewMitra', [
            'mitras' => $mitras,
            'searchTerm' => $searchTerm
        ]);
    }
    // public function search(Request $request)
    // {
    //     $search = $request->input('search');

    //     $mitras = Mitra::query()
    //         ->where('mitraName', 'LIKE', "%{$search}%")
    //         ->get();

    //     return view('roles.admin.mitra.viewMitra', compact('mitras'));
    // }
    
    // public function search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $mitras = Mitra::query()
    //         ->where('mitraName', 'LIKE', "%{$search}%")
    //         ->get();

    //     return view('roles.admin.viewAdmin', compact('mitras'));
    // }

    public function toggleBlock($id){
        $mitra = Mitra::find($id);
        $user = User::find($mitra->user_id);
        // dd($user);
        // dd($mitra);
        if($mitra->isBlocked == 0){
            $mitra->isBlocked = 1;
            $user->isBlocked = 1;
            // dd($user);
        } else {
            $mitra->isBlocked = 0;
            $user->isBlocked = 0;
        }
        $user->save();
        $mitra->save();

        // dd($user);
        return redirect()->back();
    }


    public function viewMitra()
    {
        $mitras = Mitra::all(); // Fetch all mitras

        return view('roles.admin.mitra.viewMitra', compact('mitras'));
    }
                
    public function toggleBlockedStatus($id){
        $mitra = Mitra::find($id);
        if ($mitra->isBlocked == 0) {
            $mitra->isBlocked = 1;
        } else {
            $mitra->isBlocked = 0;
        }
        $mitra->save();
        return redirect()->back()->with('success', 'Mitra status updated successfully.');;
    }

}
