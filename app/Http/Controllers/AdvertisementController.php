<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    public function create() {
        return view('roles.admin.advertise.addAdvertisementAdmin');
    }

    public function store(Request $request){
        Advertisement::create($request->all());
        return redirect()->route('view_advertisement');
    }

    public function index() {
        $advertisements = Advertisement::all();
        return view('roles.admin.advertise.viewAdvertisementAdmin', ['advertise' => $advertisements]);
    }

    public function destroy($id) {
        $advertisement = Advertisement::find($id);
        if ($advertisement) {
            $advertisement->delete();
        }
        return redirect()->route('view_advertisement');
    }

    public function edit($id) {
        $advertisement = Advertisement::findOrFail($id);
        return view('roles.admin.advertise.updateAdvertisementAdmin', ['advertisement' => $advertisement]);
    }

    public function update(Request $request, $id) {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->update($request->all());
        return redirect()->route('view_advertisement');
    }
}
