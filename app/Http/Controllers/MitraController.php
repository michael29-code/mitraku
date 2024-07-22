<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certificate;
use App\Models\Penghargaan;
use PDF;
use App\Models\Mitra;
use App\Models\Pengajuan;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function createStep1()
    {
        $categories = Category::all();
        return view('roles.user.create_mitra.createMitra1', compact('categories'));
    }

    public function storeStep1(Request $request)
    {
        $validatedData = $request->validate([
            'mitraName' => 'required|string|max:255',
            'mitraOverview' => 'required|string',
            'mitraYear' => 'required|integer',
            'mitraWebsite' => 'nullable|string',
            'mitraCategory' => 'required|string|not_in:',
            'image_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'mitraName.min' => 'Mitra Name must be at least 8 characters.',
            'mitraName.unique' => 'Mitra Name must be unique.',
            'mitraCategory.required' => 'Please select a category.',
            'mitraCategory.not_in' => 'Please select a valid category.',
        ]);

        if ($request->hasFile('image_cover')) {
            $image = $request->file('image_cover');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/mitra-images', $imageName);
            $validatedData['image_cover'] = $imageName;
        }

        $request->session()->put('step1Data', $validatedData);
        return redirect()->route('create-mitra-2')
            ->with('success', 'Step 1 completed successfully');
    }

    public function createStep2()
    {
        return view('roles.user.create_mitra.createMitra2');
    }

    public function storeStep2(Request $request)
    {
        $validatedData = $request->validate([
            'mitra_details' => 'required|string',
            'contactName' => 'required|string|max:255',
            'contactEmail' => 'required|email',
            'contactPhoneNumber' => 'required|string|max:20',
        ]);

        $request->session()->put('step2Data', $validatedData);
        // dd($validatedData); 
        return redirect()->route('create-mitra-3')
            ->with('success', 'Step 2 completed successfully');
    }

    public function createStep3()
    {
        return view('roles.user.create_mitra.createMitra3');
    }

    public function storeStep3(Request $request)
    {
        $user = Auth::user();
        $step1Data = $request->session()->get('step1Data', []);
        $step2Data = $request->session()->get('step2Data', []);
    
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'image_map' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'isBlock' => '0'
        ]);
    
        $mergedData = array_merge($step1Data, $step2Data, $validatedData);
    
        if ($request->hasFile('image_map')) {
            $locationMap = $request->file('image_map');
            $locationMapName = time() . '_' . $locationMap->getClientOriginalName();
            $locationMap->move(public_path('images'), $locationMapName);
            $validatedData['image_map'] = $locationMapName;
        }
    
        $mitra = new Mitra();
        $mitra->fill($mergedData);
        $mitra->user_id = $user->id; 
        if (isset($validatedData['image_map'])) {
            $mitra->image_map = $validatedData['image_map'];
        }
    
        // dd($mitra);
    
        $mitra->save();
        $user->level = 3;
        $user->save();
        $request->session()->forget(['step1Data', 'step2Data', 'mitra_id']);
        return redirect()->route('home')->with('success', 'Mitra created successfully!');
    }
    
    public function mitra()
    {
        $activeMitraIds = Transaction::where('status', 'active')
            ->pluck('advertise_id')
            ->toArray();

        $mitras = Mitra::select('*')
            ->orderByRaw('FIELD(id, ' . implode(',', $activeMitraIds) . ') DESC')
            ->paginate(4);

        return view('roles.user.mitra.mitra', compact('mitras'));
    }

    public function show($id)
{
    $mitra = Mitra::findOrFail($id);
    $user = $mitra->user; 

    return view('roles.user.mitra.detailMitra', compact('mitra', 'user'));
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
