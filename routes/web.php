<?php

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

Route::get('/manage-blog', function () {
    return view('manageBlogPageAdmin');
});
Route::get('/view-blog', function () {
    return view('viewBlogPageAdmin');
});
Route::get('/view-blog-detail', function () {
    return view('viewBlogPageDetailAdmin');
});
Route::get('/write-blog', function () {
    return view('writeBlogPageAdmin');
});
Route::get('/edit-blog', function () {
    return view('editBlogPageAdmin');
});



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
