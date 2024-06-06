<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\detailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);



// sewa
Route::get('/sewa-lap', [homeController::class, 'sewa'])->name('sewa');
// detail lap
Route::get('/detail-lapangan', [detailController::class, 'detail'])->name('detail');
// book lapangan
Route::get('/book-lapangan', [bookController::class, 'pilih'])->name('pilih');
Route::get('/book-lapangan/bayar', [bookController::class, 'bayar'])->name('bayar');
Route::get('/book-lapangan/verifikasi', [bookController::class, 'verifikasi'])->name('verifikasi');
Route::get('/book-lapangan/berhasil', [bookController::class, 'berhasil'])->name('berhasil');
Route::get('/book-lapangan/gagal', [bookController::class, 'gagal'])->name('gagal');


// admin role
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/user-edit', [AdminController::class, 'edituser'])->name('admin.edituser');
Route::get('/admin/user-tambah', [AdminController::class, 'tambahuser'])->name('admin.tambahuser');
Route::get('/admin/jadwal', [AdminController::class, 'jadwal'])->name('admin.jadwal');
Route::get('/admin/jadwal-tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
Route::get('/admin/jadwal-edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::get('/admin/verification', [AdminController::class, 'verification'])->name('admin.verification');

// user view
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/profil/transaksi', [UserController::class, 'transaksi'])->name('transaksi');

// user role
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [UserController::class, 'home1'])->name('home');

});