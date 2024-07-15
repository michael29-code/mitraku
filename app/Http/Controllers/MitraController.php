<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Mitra;
use App\Models\Pengajuan;
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

        $request->session()->put('step1Data', $validatedData);
        return redirect()->route('create-mitra-2')
        ->withInput($validatedData)
        ->with('success', 'Step 1 completed successfully');
    }

    public function createStep2()
    {
        return view('roles.user.create_mitra.createMitra2');
    }

    public function storeStep2(Request $request)
    {
        $step1Data = $request->session()->get('step1Data');
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

        $validatedData['galeri'] = $galleryImages;
        // dd($validatedData);

        $request->session()->put('step2Data', $validatedData);

        return redirect()->route('create-mitra-3')
            ->withInput($validatedData)
            ->with('step1Data', $step1Data)
            ->with('success', 'Step 2 completed successfully');
    }

    public function createStep3()
    {
        return view('roles.user.create_mitra.createMitra3');
    }

    public function storeStep3(Request $request)
    {
        dd($request->session()->get('step1Data'));
        $user = Auth::user();
        $step1Data = $request->session()->get('step1Data');
        $step2Data = $request->session()->get('step2Data');

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

        $finalData = array_merge($step1Data, $step2Data, $validatedData);
        $mitra = new Mitra();
        $mitra->user_id = $user->id;
        $mitra->mitraName = $finalData['mitraName'];
        $mitra->mitraOverview = $finalData['mitraOverview'];
        $mitra->mitraYear = $finalData['mitraYear'];
        $mitra->mitraWebsite = $finalData['mitraWebsite'];
        $mitra->mitraCategory = $finalData['mitraCategory'];
        $mitra->image_cover = $finalData['image_cover'];
        $mitra->contactName = $finalData['contactName'];
        $mitra->contactEmail = $finalData['contactEmail'];
        $mitra->contactPhoneNumber = $finalData['contactPhoneNumber'];
        $mitra->mitra_details = $finalData['mitra_details'];

        if (isset($finalData['galeri'])) {
            $mitra->galeri = json_encode($finalData['galeri']);
        }

        if (isset($finalData['latest_rating_and_certificate'])) {
            $mitra->latest_rating_and_Certificate = $finalData['latest_rating_and_certificate'];
        }

        if (isset($finalData['awards'])) {
            $mitra->awards = $finalData['awards'];
        }
        if (isset($finalData['address'])) {
            $mitra->address = $finalData['address'];
        }        
        if (isset($finalData['image_map'])) {
            $mitra->image_map = $finalData['image_map'];
        }
        $mitra->save();
        dd($mitra);
        $request->session()->forget('step1Data');
        $request->session()->forget('step2Data');

        return redirect()->route('home')->with('success', 'Mitra created successfully!');
    }

    public function mitra()
    {
        // Fetch all Mitra records
        $mitras = Mitra::all();

        // Pass the Mitra records to the view
        return view('roles.user.mitra.mitra', compact('mitras'));
    }

    public function show($id)
    {
        $mitra = Mitra::find($id);
        // dd($mitra);
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
        $search = $request->input('search');

        $mitras = Mitra::query()
            ->where('mitraName', 'LIKE', "%{$search}%")
            ->get();

        return view('roles.admin.mitra.viewMitra', compact('mitras'));
    }

    // public function toggleBlock($id)
    // {
    //     // Fetch the specific Mitra record by ID
    //     $mitra = Mitra::findOrFail($id);

    //     // Pass the Mitra record to the view
    //     return view('roles.user.mitra.detailMitra', compact('mitra'));
    // }

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
