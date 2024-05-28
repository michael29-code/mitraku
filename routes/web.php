<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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



<<<<<<< Updated upstream
=======
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


>>>>>>> Stashed changes
Route::get('/manage-category', function () {
    return view('manageCategoryAdmin');
});

Route::get('/view-category', [CategoryController::class, 'viewCategoryAdmin'])->name('view_category');
Route::get('/add-category', [CategoryController::class, 'addCategoryAdmin'])->name('add_category');
Route::get('/delete-category', [CategoryController::class, 'deleteCategoryAdmin'])->name('delete_category');
Route::get('/update-category', [CategoryController::class, 'updateCategoryAdmin'])->name('update_category');
Route::post('/store-category', [CategoryController::class, 'store'])->name('store_category');

// Route::resource('/category', CategoryController::class);

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

Route::get('/admin-advertise-view', function () {
    return view('viewAdvertiseAdmin');
});
Route::get('/form-pengajuan', function () {
    return view('viewFormPengajuan');
});

