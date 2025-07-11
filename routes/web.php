<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\UKMPutriController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\AnggotaDepartementController;

// // php artisan storage:link untuk hosting
// Route::get('/create-storage-link', function () {
//     $targetFolder = base_path('storage/app/public'); // Folder tujuan
//     $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage'; // Lokasi symbolic link di public_html

//     if (file_exists($linkFolder)) {
//         return 'Link folder sudah ada.';
//     }

//     try {
//         symlink($targetFolder, $linkFolder); // Membuat symbolic link
//         return 'Symlink berhasil dibuat.';
//     } catch (Exception $e) {
//         return 'Gagal membuat symlink: ' . $e->getMessage();
//     }
// });

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('home.tentang');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('home.kontak');

// guest
Route::middleware('guest')->group(function () {
    // auth
    Route::get('/req-auth', [AuthController::class, 'reqAuth'])->name('auth.reqAuth');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('/sign-up', [AuthController::class, 'signup'])->name('auth.signup');
    Route::post('/sign-up', [AuthController::class, 'addUser'])->name('auth.addUser');
});

// auth
Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
Route::middleware('auth')->group(function () {
    Route::get('/aspiras-list', [AspirasiController::class, 'list'])->name('aspirasi.list');
    Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
    Route::delete('/aspirasi/{aspirasi}', [AspirasiController::class, 'destroy'])->name('aspirasi.destroy');
    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// blog
Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('post.show');

// IS ADMIN Middleware
Route::middleware([IsAdmin::class])->group(function () {
    // users
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/profile/{user:username}', [UserController::class, 'profile'])->name('user.profile');
    // Divisi
    Route::get('/divisi', [DivisionController::class, 'index'])->name('divisi.index');
    Route::get('/divisi-create', [DivisionController::class, 'create'])->name('divisi.create');
    Route::post('/divisi-create', [DivisionController::class, 'store'])->name('divisi.store');
    Route::get('/divisi-edit/{division}', [DivisionController::class, 'edit'])->name('divisi.edit');
    Route::put('/divisi-edit/{division}', [DivisionController::class, 'update'])->name('divisi.update');
    Route::delete('/divisi-delete/{division}', [DivisionController::class, 'destroy'])->name('divisi.destroy');
    // Departement
    Route::get('/departement-manage', [DepartementController::class, 'manage'])->name('departement.manage');
    Route::get('/departement-create', [DepartementController::class, 'create'])->name('departement.create');
    Route::post('/departement-create', [DepartementController::class, 'store'])->name('departement.store');
    Route::get('/departement-edit/{departement}', [DepartementController::class, 'edit'])->name('departement.edit');
    Route::put('/departement-edit/{departement}', [DepartementController::class, 'update'])->name('departement.update');
    Route::delete('/departement-delete/{departement}', [DepartementController::class, 'destroy'])->name('departement.destroy');
    // Anggota Departement
    Route::get('/anggota_departement', [AnggotaDepartementController::class, 'manage'])->name('anggota_departement.manage');
    Route::get('/anggota_departement-create', [AnggotaDepartementController::class, 'create'])->name('anggota_departement.create');
    Route::post('/anggota_departement-create', [AnggotaDepartementController::class, 'store'])->name('anggota_departement.store');
    Route::get('/anggota_departement-edit/{anggotaDepartement}', [AnggotaDepartementController::class, 'edit'])->name('anggota_departement.edit');
    Route::put('/anggota_departement-edit/{anggotaDepartement}', [AnggotaDepartementController::class, 'update'])->name('anggota_departement.update');
    Route::delete('/anggota_departement-delete/{anggotaDepartement}', [AnggotaDepartementController::class, 'destroy'])->name('anggota_departement.destroy');
    // UKM
    Route::get('/ukm-manage', [UKMController::class, 'manage'])->name('ukm.manage');
    Route::get('/ukm-create', [UKMController::class, 'create'])->name('ukm.create');
    Route::post('/ukm-create', [UKMController::class, 'store'])->name('ukm.store');
    Route::get('/ukm-edit/{uKM}', [UKMController::class, 'edit'])->name('ukm.edit');
    Route::put('/ukm-edit/{uKM}', [UKMController::class, 'update'])->name('ukm.update');
    Route::delete('/ukm-delete/{uKM}', [UKMController::class, 'destroy'])->name('ukm.destroy');
    // Blog
    Route::get('/blog-manage', [PostController::class, 'manage'])->name('post.manage');
    Route::get('/blog-create', [PostController::class, 'create'])->name('post.create');
    Route::post('/blog-create', [PostController::class, 'store'])->name('post.store');
    Route::get('/blog-edit/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/blog-edit/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/blog-delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');
});
// Departemen
Route::get('/departement', [DepartementController::class, 'index'])->name('departement.index');
Route::get('/departement/{departement}', [DepartementController::class, 'show'])->name('departement.show');

// UKM
Route::get('/ukm', [UKMController::class, 'index'])->name('ukm.index');
Route::get('/ukm/putri', [UKMController::class, 'indexPutri'])->name('ukm.index-putri');
Route::get('/ukm/{uKM}', [UKMController::class, 'show'])->name('ukm.show');