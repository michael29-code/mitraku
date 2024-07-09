<?php

use App\Http\Middleware\CheckUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\DownloadPDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengajuanController;

// === PUBLIC ===
Route::get('/', [RegisterController::class, 'signInPage']);
// Home
Route::get('/home', [HomeController::class, 'HomePage'])->name('home');
// Sign In 
Route::get('/sign-in', [RegisterController::class, 'signInPage'])->name('login');
Route::post('/sign-in', [RegisterController::class, 'authentication']);
// Sign Up
Route::get('/sign-up', [RegisterController::class, 'signUpPage'])->name('register');
Route::post('/sign-up', [RegisterController::class, 'signUpStore']);


// === MIDDLEWARE ===
// UNTUK USER YANG SUDAH LOGIN
Route::group(['middleware' => ['auth']], function () {
    // Logout
    Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');
});

// UNTUK ADMIN
Route::group(['middleware' => ['CheckUser:1']], function () {
    //BLOG
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/view-blog', [BlogController::class, 'view']);
    Route::get('/write-blog', [BlogController::class, 'writeBlog']);
    Route::post('/store-blog', [BlogController::class, 'store']);
    Route::get('/edit-blog/{blog:slug}', [BlogController::class, 'edit']);
    Route::put('/update-blog/{blog:slug}', [BlogController::class, 'update']);
    Route::delete('/delete-blog/{blog:slug}', [BlogController::class, 'destroy']);
    Route::get('/view-blog-detail/{blog:slug}', [BlogController::class, 'show']);
    Route::get('/search', [BlogController::class, 'search'])->name('search');

    //CATEGORY
    Route::get('/manage-category', function () {
        return view('roles.admin.category.manageCategoryAdmin');
    })->name('manage-category');
    Route::get('/view-category', [CategoryController::class, 'viewCategoryAdmin'])->name('view-category');
    Route::get('/add-category', [CategoryController::class, 'addCategoryAdmin'])->name('add-category');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('store-category');
    Route::get('/delete-category', [CategoryController::class, 'deleteCategoryAdmin'])->name('delete-category');
    Route::get('/update-category/{jenisKategori}', [CategoryController::class, 'updateCategoryAdmin'])->name('update-category');
    Route::delete('/view-category/{jenisKategori}', [CategoryController::class, 'destroy'])->name('destroy-category');
    Route::put('/update-category/{jenisKategori}', [CategoryController::class, 'update'])->name('update-category.submit');

    //ADVERTISMENT
    // Route::get('/manage-advertisement', [AdvertisementController::class, 'manage'])->name('manage-advertisement');    
    // Route::get('/manage-advertisement-view', [AdvertisementController::class, 'index'])->name('view-advertisement');
    // Route::get('/manage-advertisement-add', [AdvertisementController::class, 'store'])->name('store-advertisement');
    // Route::delete('/manage-advertisements/{id}/delete', [AdvertisementController::class, 'destroy'])->name('delete-advertisement');
    // Route::get('/manage-advertisements/{id}/edit', [AdvertisementController::class, 'edit'])->name('edit-advertisement');
    // Route::put('/manage-advertisements/{id}/update', [AdvertisementController::class, 'update'])->name('update-advertisement');

    //VIEW USER
    Route::get('/view-user', [UserController::class,'index'])->name('view-user');
    Route::patch('/toggle-user-blocked/{id}', [UserController::class, 'toggleBlock'])->name('toggle-blocked');
    Route::get('/user-search', [UserController::class,'index'])->name('user-search');
    
});

// UNTUK USER
Route::group(['middleware' => ['CheckUser:2']], function () {
    //MITRA
    Route::get('/view-mitra', [MitraController::class, 'mitra'])->name('view-mitra');
    Route::get('detailMitra', function () {
        return view('roles.user.mitra.detailMitra');
    })->name('detailMitra');
    
    // CREATE MITRA
    Route::get('/create-mitra-step-1', [MitraController::class, 'createMitra1']);
    Route::get('/create-mitra-step-2', [MitraController::class, 'createMitra2']);
    Route::get('/create-mitra-step-3', [MitraController::class, 'createMitra3']);

    //BLOG
    Route::get('/blog', [BlogController::class, 'viewBlogUser'])->name('view-blog');
    Route::get('/blog-detail', [BlogController::class, 'blogDetailUser'])->name('view-blog-detail');

    //PROFILE
    Route::get('/profile', function () {
        return view('profile');
    });

    //ADVERTISMENT
    Route::get('/userAdvertisement', function () {
        return view('roles.user.advertise.userAdvertisement');
    })->name('view-advertisement');


    // FORM PENGAJUAN
    Route::get('/form-pengajuan', function () {
        return view('roles.user.mitra.viewFormPengajuan');
    })->name('form-pengajuan');


    //PAYMENT
    Route::get('/payment', function () {
        return view('paymentPage');
    });    
});

Route::get('/profile/{id}', [UserController::class, 'show']);




// WOI INGET DELETE INIIIIIIIIIIIIIII
Route::get('/manage-advertisement', [AdvertisementController::class, 'manage'])->name('manage-advertisement');    
Route::get('/manage-advertisement-view', [AdvertisementController::class, 'index'])->name('view-advertisement');
Route::get('/manage-advertisement-add', [AdvertisementController::class, 'create'])->name('add-advertisement');
Route::post('/manage-advertisement-store', [AdvertisementController::class, 'store'])->name('store-advertisement');
Route::delete('/manage-advertisements/{id}/delete', [AdvertisementController::class, 'destroy'])->name('delete-advertisement');
Route::get('/manage-advertisements/{id}/edit', [AdvertisementController::class, 'edit'])->name('edit-advertisement');
Route::put('/manage-advertisements/{id}/update', [AdvertisementController::class, 'update'])->name('update-advertisement');
