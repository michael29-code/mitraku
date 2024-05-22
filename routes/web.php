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



Route::get('/blog/detail', function () {
    return view('blogDetail');
});



Route::get('/viewMitra', function () {
    return view('viewMitra');
});

Route::get('/viewUser', function () {
    return view('viewUser');
});

