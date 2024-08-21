<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Mitra;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class MitraController extends Controller
{
    public function createStep1()
    {
        $categories = Category::all();
        return view('roles.user.create_mitra.createMitra1', compact('categories'));
    }

    public function storeStep1(Request $request)
    {
        $rules = [
            'mitraName' => ['required', 'string', 'min:8', 'max:255', 'unique:mitras,mitraName'],
            'mitraOverview' => ['required', 'string', function ($attribute, $value, $fail) {
                if (str_word_count($value) < 15) {
                    $fail('The Mitra Overview must be at least 15 words');
                }
            }],
            'mitraYear' => ['required', 'integer', 'min:1001'], 
            'mitraWebsite' => ['required'], 
            'mitraCategory' => ['required', 'exists:categories,id'], 
            'image_cover' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];

        $messages = [
            'mitraName.required' => 'The Mitra Name is required.',
            'mitraName.min' => 'The Mitra Name must be at least 8 characters.',
            'mitraName.unique' => 'The Mitra Name must be unique.',
            'mitraOverview.required' => 'The Mitra Overview is required.',
            'mitraYear.required' => 'The Establishment Year is required.',
            'mitraYear.min' => 'The Establishment Year must be greater than 1000.',
            'mitraWebsite.url' => 'The Website must be a valid URL.',
            'mitraCategory.required' => 'Please select a category.',
            'mitraCategory.exists' => 'Please select a valid category.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();

        if ($request->hasFile('image_cover')) {
            $image = $request->file('image_cover');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/mitra-images', $imageName); 
            $validatedData['image_cover'] = $imageName;
        } else {
            $validatedData['image_cover'] = 'default_mitra_image.jpg'; 
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

        $rules = [
            'mitra_details' => ['required', function ($attribute, $value, $fail) {
                if (str_word_count($value) < 20) { 
                    $fail('The Mitra Details must be at least 20 words.');
                }
            }],
            'contactName' => ['required', 'string', 'min:8', 'max:255', 'unique:mitras,contactName'],
            'contactEmail' => ['required', 'string', 'min:8', 'max:255'],
            'contactPhoneNumber' => [
                'required'
            ],
        ];

        $messages = [
            'mitra_details.required' => 'The Mitra Details field is required.',
            'contactName.required' => 'The Contact Name is required.',
            'contactName.string' => 'The Contact Name must be a string.',
            'contactName.max' => 'The Contact Name may not be greater than 255 characters.',
            'contactEmail.required' => 'The Contact Email must be a valid email',
            'contactPhoneNumber.required' => 'The Contact Phone Number field is required.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); 
        }
    
        $validatedData = $validator->validated();
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

    $rules = [
        'address' => ['required', 'string', 'min:5', 'max:255', 'unique:mitras,mitraName'],
        'image_map' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        'isBlock' => 'nullable|boolean'
    ];

    $messages = [
        'address.required' => 'The Address is required.'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $validatedData = $validator->validated();
    
    if ($request->hasFile('image_map')) {
        $image = $request->file('image_map');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/mitra-images', $imageName);
        $validatedData['image_map'] = $imageName;
    } else {
        $validatedData['image_map'] = 'mapLocation.png'; 
    }

    $mergedData = array_merge($step1Data, $step2Data, $validatedData);

    $mitra = new Mitra();
    $mitra->fill($mergedData);
    $mitra->user_id = $user->id;
    $mitra->isBlocked = $validatedData['isBlock'] ?? 0;
    $mitra->save();

    $user->level = 3;
    $user->save();

    $request->session()->forget(['step1Data', 'step2Data', 'mitra_id']);
    return redirect()->route('home')->with('success', 'Mitra created successfully!');
}

    
    public function mitra(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = $request->input('category'); 

        $mitras = Mitra::with('transactions')
            ->when($selectedCategory, function ($query, $selectedCategory) {
                return $query->where('mitraCategory', $selectedCategory);
            })
            ->paginate(6);

        $shuffledAdvertisement = Cache::get('shuffled_advertisement');

        return view('roles.user.mitra.mitra', compact('mitras', 'categories', 'shuffledAdvertisement', 'selectedCategory'));
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
        $mitras = Mitra::orderBy('created_at', 'DESC')->get();
        return view('roles.admin.mitra.viewMitra', compact('mitras'));
        
    }


    public function search(Request $request)
    {
        $shuffledAdvertisement = Cache::get('shuffled_advertisement');
        $searchTerm = $request->input('search');
        $categoryId = $request->input('category');
        $query = Mitra::query();

        if ($searchTerm) {
            $query->where('mitraName', 'like', '%' . $searchTerm . '%');
        }

        if ($categoryId) {
            $category = Category::find($categoryId);

            if ($category) {
                $query->where('mitraCategory', $category->jenisKategori);
            }
        }

        $mitras = $query->paginate(10);
        $categories = Category::all();

        return view('roles.user.mitra.mitra', compact('mitras', 'searchTerm', 'categories', 'categoryId','shuffledAdvertisement'));
    }

    // ADMIN
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
        $message = $mitra->mitraName;
        if($mitra->isBlocked == 0){
            $mitra->isBlocked = 1;
            $user->isBlocked = 1;
            $message = $message.' has been blocked successfully'; 
        } else {
            $mitra->isBlocked = 0;
            $user->isBlocked = 0;
            $message = $message.' has been unblocked successfully'; 
        }
        $user->save();
        $mitra->save();

        // dd($user);
        return redirect()->back()->with('success', $message);
    }

    // USER
    public function viewMitra()
    {
        $mitras = Mitra::all();
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

    public function profileMitra()
    {
        $userID = Auth::user()->id;
        $mitra = Mitra::where('user_id', '=', $userID)->first();
        
        return view('roles.user.profile.profileMitra', compact('mitra'));
    }

    public function editProfileMitra($id)
    {
        $mitra = Mitra::findOrFail($id);
        $categories = Category::all(); // Fetch all categories from the database
        // dump($categories);
        return view('roles.user.profile.editProfileMitra', compact('mitra', 'categories'));
    }
    
    public function updateProfileMitra(Request $request, Mitra $mitra)
    {
        // $mitra = Mitra::findOrFail($id);

        $request->validate([
            'mitraWebsite' => 'required|string',
            'mitraCategory' => 'required|exists:categories,id',
            'mitraOverview' => 'required|string|min:15|max:255',
            'contactName' => 'required|string|min:8|max:255',
            'contactPhoneNumber' => 'required|string',
            'contactEmail' => 'required|email|max:255',
            'mitraDetails' => 'required|string|min:20|max:255',
            'address' => 'required|string|max:255',
        ]);

        $mitra->mitraWebsite = $request->mitraWebsite;
        $mitra->mitraCategory = $request->mitraCategory;
        $mitra->mitraOverview = $request->mitraOverview;
        $mitra->contactName = $request->contactName;
        $mitra->contactPhoneNumber = $request->contactPhoneNumber;
        $mitra->contactEmail = $request->contactEmail;
        $mitra->mitra_details = $request->mitraDetails;
        $mitra->address = $request->address;


        if ($request->file('image_cover')) {
            if ($request->oldImageMitra) {
                Storage::delete($request->oldImageMitra);
            }
            $mitra->image_cover = $request->file('image_cover')->store('image_cover');
        }
        if ($request->file('image_map')) {
            if ($request->oldImageLocation) {
                Storage::delete($request->oldImageLocation);
            }
            $mitra->image_map = $request->file('image_map')->store('image_map');
        }

        $mitra->save();

        return redirect()->route('profile-mitra')->with('success', 'Profile updated successfully');
    }
}
