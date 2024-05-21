<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'HomePage']);

Route::get('/create-mitra', function () {
    return view('createMitra');
});
Route::get('/add-detail-mitra', function () {
    return view('addDetailMitra');
});
Route::get('/add-detailing-mitra', function () {
    return view('addDetailingMitra');
});

Route::get('/blog', function () {
    return view('blog');
});




Route::get('/viewMitra', function () {
    return view('viewMitra');
});

Route::get('/viewUser', function () {
    return view('viewUser');
});

