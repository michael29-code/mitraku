<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('HomePage');
});
Route::get('/create-mitra', function () {
    return view('createMitra');
});
Route::get('/add-detail-mitra', function () {
    return view('addDetailMitra');
});
Route::get('/add-detailing-mitra', function () {
    return view('addDetailingMitra');
});



