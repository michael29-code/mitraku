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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;

// === PUBLIC ===
Route::get('/', [HomeController::class, 'HomePage']);

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
    Route::get('/view-blog', [BlogController::class, 'view'])->name('view-blog-admin');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog-admin');
    Route::get('/write-blog', [BlogController::class, 'writeBlog'])->name('write-blog-admin');
    Route::post('/store-blog', [BlogController::class, 'store'])->name('store-blog-admin');
    Route::get('/edit-blog/{blog:slug}', [BlogController::class, 'edit'])->name('edit-blog-admin');
    Route::put('/update-blog/{blog:slug}', [BlogController::class, 'update'])->name('update-blog-admin');
    Route::delete('/delete-blog/{blog:slug}', [BlogController::class, 'destroy'])->name('destroy-blog-admin');
    Route::get('/view-blog-detail/{blog:slug}', [BlogController::class, 'show'])->name('show-blog-admin');
    Route::get('/search-blog', [BlogController::class, 'search'])->name('search-blog-admin');

    //CATEGORY
    Route::get('/manage-category', function () {
        return view('roles.admin.category.manageCategoryAdmin');
    })->name('manage-category-admin');
    Route::get('/view-category', [CategoryController::class, 'viewCategoryAdmin'])->name('view-category-admin');
    Route::get('/add-category', [CategoryController::class, 'addCategoryAdmin'])->name('add-category');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('store-category');
    Route::get('/delete-category', [CategoryController::class, 'deleteCategoryAdmin'])->name('delete-category');
    Route::get('/update-category/{jenisKategori}', [CategoryController::class, 'updateCategoryAdmin'])->name('update-category');
    Route::delete('/view-category/{jenisKategori}', [CategoryController::class, 'destroy'])->name('destroy-category');
    Route::put('/update-category/{jenisKategori}', [CategoryController::class, 'update'])->name('update-category.submit');

    //ADVERTISMENT
    Route::get('/manage-advertisement', [AdvertisementController::class, 'manage'])->name('manage-advertisement-admin');
    Route::get('/manage-advertisement-view', [AdvertisementController::class, 'index'])->name('view-advertisement-admin');
    Route::get('/manage-advertisement-add', [AdvertisementController::class, 'create'])->name('add-advertisement-admin');
    Route::post('/manage-advertisement-store', [AdvertisementController::class, 'store'])->name('store-advertisement-admin');
    Route::delete('/manage-advertisements/{id}/delete', [AdvertisementController::class, 'destroy'])->name('delete-advertisement-admin');
    Route::get('/manage-advertisements/{id}/edit', [AdvertisementController::class, 'edit'])->name('edit-advertisement-admin');
    Route::put('/manage-advertisements/{id}/update', [AdvertisementController::class, 'update'])->name('update-advertisement-admin');
    Route::get('/search-advertisement', [AdvertisementController::class, 'search'])->name('search-advertisement-admin');


    //VIEW USER
    Route::get('/view-user-admin', [UserController::class, 'index'])->name('view-user-admin');
    Route::patch('/toggle-user-blocked/{id}', [UserController::class, 'toggleBlock'])->name('toggle-blocked-user');
    Route::get('/user-search', [UserController::class, 'search'])->name('user-search-admin');

    //VIEW MITRA
    Route::get('/view-mitra-admin', [MitraController::class, 'index'])->name('view-mitra-admin');
    // Route::get('/view-mitra')
    Route::patch('/toggle-mitra-blocked/{id}', [MitraController::class, 'toggleBlock'])->name('toggle-blocked-mitra');
    Route::get('/mitra-search', [MitraController::class, 'index'])->name('mitra-search-admin');
});

Route::group(['middleware' => ['CheckBlockUser:0']], function () {
    // UNTUK USER DAN MITRA
    Route::group(['middleware' => ['CheckUser:2,3']], function () {
        //MITRA
        Route::get('/view-mitra', [MitraController::class, 'mitra'])->name('view-mitra');
        Route::get('detailMitra', function () {
            return view('roles.user.mitra.detailMitra');
        })->name('detailMitra');

        // CREATE MITRA
        Route::get('/create-mitra-step-1', [MitraController::class, 'createMitra1'])->name('create-mitra-1');
        Route::get('/create-mitra-step-2', [MitraController::class, 'createMitra2'])->name('create-mitra-2');
        Route::get('/create-mitra-step-3', [MitraController::class, 'createMitra3'])->name('create-mitra-3');

        //BLOG
        Route::get('/blog', [BlogController::class, 'viewBlogUser'])->name('view-blog');
        Route::get('/blog-detail', [BlogController::class, 'blogDetailUser'])->name('view-blog-detail');

        //PROFILE
        // Route::get('/profile', function () {
        //     return view('profile');
        // });

        //ADVERTISMENT
        Route::get('/userAdvertisement', function () {
            return view('roles.user.advertise.userAdvertisement');
        })->name('view-advertisement');


        Route::get('/view-pengajuan', [PengajuanController::class, 'view']);
        Route::get('/form-pengajuan', [PengajuanController::class, 'create']);
        Route::post('/add-pengajuan', [PengajuanController::class, 'store']);
        Route::get('/download/{pengajuan}', DownloadPDFController::class);
        Route::get('/pengajuan/edit/{id}', [PengajuanController::class, 'edit']);
        Route::put('/pengajuan/update/{id}', [PengajuanController::class, 'update']);
        Route::delete('/pengajuan/delete/{id}', [PengajuanController::class, 'destroy']);
        //PAYMENT
        Route::get('/transactions', [PaymentController::class, 'index']);
        Route::get('/payment', [PaymentController::class, 'show']);
        Route::post('/pay/store', [PaymentController::class, 'pay']);
        Route::get('/checkout/{transaction}', [PaymentController::class, 'checkout']);
        Route::get('/checkout/success/{transaction}', [PaymentController::class, 'success'])->name('checkout-success');
    });
});

//PROFILE USER
Route::get('/profile-user', [UserController::class, 'show'])->name('profile-user');
Route::put('/profile-user', [UserController::class, 'change_password'])->name('change-password');
Route::post('/profile-user', [UserController::class, 'uploud_image'])->name('uploud-image');


