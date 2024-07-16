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
        Advertisement::create($request->all());
        return redirect()->route('view-advertisement-admin')->with('success', 'Advertisement created successfully.');
    }

    public function index() {
        $advertisements = Advertisement::all();
        return view('roles.admin.advertise.viewAdvertisementAdmin', ['advertisements' => $advertisements]);
    }

    public function destroy($id) {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->delete();
        return redirect()->route('view-advertisement-admin')->with('success', 'Advertisement deleted successfully.');
    }

    public function edit($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        return view('roles.admin.advertise.updateAdvertisementAdmin', compact('advertisement'));
    }

    public function update(Request $request, $id) {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->update($request->all());
        return redirect()->route('view-advertisement-admin')->with('success', 'Advertisement updated successfully.');
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
