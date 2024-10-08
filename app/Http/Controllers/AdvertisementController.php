<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Sponsor;

class AdvertisementController extends Controller
{
    //USER
    public function userIndex()
    {
        $advertisements = Advertisement::all();
        $sponsors = Sponsor::all(); // Ambil data sponsor
        return view('roles.user.advertise.userAdvertisement', compact('advertisements', 'sponsors'));
    }

    //ADMIN
    public function create() {
        return view('roles.admin.advertise.addAdvertisementAdmin');
    }

    public function store(Request $request){
        $incomingFields = $request->validate([
            'title' => ['required', 'min:5', 'unique:advertise'],
            'price' => ['required', 'numeric', 'min:1'],
            'period' => ['required', 'numeric', 'min:1'],
            'description' => ['required', 'min:100', 'max:255'],

        ]);
        Advertisement::create($incomingFields);
        return redirect()->route('view-advertisement-admin')->with('success', $incomingFields['title'] . ' created successfully.');
    }

    public function index() {
        $advertisements = Advertisement::orderBy('created_at', 'DESC')->get();
        return view('roles.admin.advertise.viewAdvertisementAdmin', ['advertisements' => $advertisements]);
    }

    public function destroy($id) {
        $advertisement = Advertisement::findOrFail($id);

        $message = $advertisement->title.' deleted successfully.';
        $advertisement->delete();
        return redirect()->route('view-advertisement-admin')->with('success', $message );
    }

    public function edit($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        return view('roles.admin.advertise.updateAdvertisementAdmin', compact('advertisement'));
    }

    public function update(Request $request, $id) {
        $advertisement = Advertisement::findOrFail($id);
        $incomingFields = $request->validate([
            'title' => ['required', 'min:5'],
            'price' => ['required', 'numeric', 'min:1'],
            'period' => ['required', 'numeric', 'min:1'],
            'description' => ['required', 'min:100', 'max:255'],
            
        ]);
        $advertisement->update($incomingFields);
        return redirect()->route('view-advertisement-admin')->with('success', $incomingFields['title'] . ' updated successfully.');
        
        // return redirect()->route('view-advertisement-admin')->with('success', 'Advertisement updated successfully.');
    }

    public function manage() {
        return view('roles.admin.advertise.manageAdvertisementAdmin');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $advertisements = Advertisement::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();

        return view('roles.admin.advertise.viewAdvertisementAdmin', compact('advertisements'));
    }
}
