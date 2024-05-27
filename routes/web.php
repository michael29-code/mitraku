<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'HomePage']);

// Sign In 
Route::get('/sign-in', function () {
    return view('signInPage');
});
// Sign Up
Route::get('/sign-up', function () {
    return view('signUpPage');
});

Route::get('/profile', function () {
    return view('profile');
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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/manage-blog',[BlogController::class,'manageBlog']);

Route::get('/view-blog', [BlogController::class,'view']);

Route::get('/view-blog-detail/{blog:slug}', [BlogController::class,'show']);
Route::get('/write-blog', [BlogController::class,'writeBlog']);
Route::post('/store-blog', [BlogController::class,'store']);

Route::get('/edit-blog/{blog:slug}',[BlogController::class,'edit']);



Route::get('/manage-category', function () {
    return view('manageCategoryAdmin');
});

Route::get('/view-category', function () {
    return view('viewCategoryAdmin');
});

Route::get('/add-category', function () {
    return view('addCategoryAdmin');
});

Route::get('/delete-category', function () {
    return view('deleteCategoryAdmin');
});

Route::get('/update-category', function () {
    return view('updateCategoryAdmin');
});


Route::get('/blog-detail', function () {
    return view('blogDetail');
});

Route::get('/viewMitra', function () {
    return view('viewMitra');
});

Route::get('/viewUser', function () {
    return view('viewUser');
});

Route::get('/userAdvertisement', function () {
    return view('userAdvertisement');
});
