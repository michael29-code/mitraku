<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    public function viewAdvertisementAdmin() {
        return view('viewAdvertisementAdmin');
    }
    
    public function addAdvertisementAdmin() {
        return view('addAdvertisementAdmin');
    }
    
    public function deleteAdvertisementAdmin() {
        return view('deleteAdvertisementAdmin');
    }
    
    public function updateAdvertisementAdmin() {
        return view('updateAdvertisementAdmin');
    }
}
