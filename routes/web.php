<?php

use App\Http\Middleware\CheckUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\UserController;

// === PUBLIC ===
Route::get('/', [RegisterController::class, 'signInPage']);
// Route::get('/createMitra', [MitraController::class, 'createMitra']);
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
});

// UNTUK USER
Route::group(['middleware' => ['CheckUser:2']], function () {
    // CREATE MITRA
    Route::get('/view-mitra', [MitraController::class, 'mitra'])->name('view-mitra');
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
});


// PUNYA NIAAAAAAAAAAA
Route::group(['middlewareUser' => ['CheckUser:2']], function(){

});


Route::get('/profile/{id}', [UserController::class,'show']);

// Route::get('/create-mitra', function () {
//     return view('createMitra');
// });


Route::get('/add-detail-mitra', [MitraController::class, 'addDetailMitra']);
Route::get('/add-detailing-mitra', [MitraController::class, 'addDetailingMitra']);

Route::get('/mitra', function () {
    return view('roles.user.mitra.mitra');
});

Route::get('/blog', [BlogUserController::class, 'blog'])->name('view-blog');
Route::get('/mitra', [MitraController::class, 'mitra']);      
Route::get('/blog-detail', [BlogDetailController::class, 'blogDetail']);


Route::get('/manage-blog',[BlogController::class,'manageBlog']);
Route::get('/view-blog', [BlogController::class,'view']);
Route::get('/write-blog', [BlogController::class,'writeBlog']);
Route::post('/store-blog', [BlogController::class,'store']);
Route::get('/edit-blog/{blog:slug}',[BlogController::class,'edit']);
Route::put('/update-blog/{blog:slug}',[BlogController::class,'update']);
Route::delete('/delete-blog/{blog:slug}',[BlogController::class,'destroy']);
Route::get('/view-blog-detail/{blog:slug}', [BlogController::class,'show']);
Route::get('/search', [BlogController::class,'search'])->name('search');


Route::get('/manage-category', function () {
    return view('roles.admin.category.manageCategoryAdmin');
})->name('manage-category');

Route::get('/view-category', [CategoryController::class, 'viewCategoryAdmin'])->name('view-category');
Route::get('/add-category', [CategoryController::class, 'addCategoryAdmin'])->name('add-category');
Route::post('/store-category', [CategoryController::class, 'store'])->name('store-category');
Route::get('/delete-category', [CategoryController::class, 'deleteCategoryAdmin'])->name('delete-category');
Route::get('/update-category/{jenisKategori}', [CategoryController::class, 'updateCategoryAdmin'])->name('update-category');
Route::delete('/view-category/{jenisKategori}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/manage-advertisement', function () {
    return view('roles.admin.advertise.manageAdvertisementAdmin');
});
Route::get('/manage-advertisement-view', [AdvertisementController::class, ''])->name('view_advertisement');
Route::get('/manage-advertisement-add', [AdvertisementController::class, ''])->name('add_advertisement');
Route::get('/manage-advertisement-delete', [AdvertisementController::class, ''])->name('delete_advertisement');
Route::get('/manage-advertisement-update', [AdvertisementController::class, ''])->name('update_advertisement');
// PUNYA NIAAAAAAAAAAA END



Route::get('/viewUser', function () {
    return view('roles.admin.block.viewUser');
});

Route::get('/userAdvertisement', function () {
    return view('roles.user.advertise.userAdvertisement');
})->name('view-advertisement');

Route::get('/form-pengajuan', function () {
    return view('roles.user.mitra.viewFormPengajuan');
})->name('form-pengajuan');

Route::get('create-mitra', [MitraController::class, 'create']);
Route::post('viewMitra', [MitraController::class, 'store']);
Route::get('/payment', function () {
    return view('paymentPage');
});

Route::get('/createMitra', function () {
    return view('roles.user.create_mitra.createMitra1');
});

Route::get('detailMitra', function () {
    return view('roles.user.mitra.detailMitra');
})->name('detailMitra');

// Route::get('mitraaa', function () {
//     return view('roles.user.mitra.mitra');
// });
