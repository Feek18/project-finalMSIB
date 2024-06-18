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

Route::get('/', [HomeController::class, 'index']);



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);



// sewa
Route::get('/sewa-lap', [HomeController::class, 'sewa'])->name('sewa');
// detail lap
Route::get('/detail-lapangan/{id}', [detailController::class, 'detail'])->name('detail');






// user view
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/profil/transaksi', [UserController::class, 'transaksi'])->name('transaksi');


// user role
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [UserController::class, 'home1'])->name('home');
    Route::get('/book-lapangan/{lapangan_id}', [bookController::class, 'pilih'])->name('pilih');
    Route::get('/book-lapangan/verifikasi', [bookController::class, 'verifikasi'])->name('verifikasi');
    Route::get('/book-lapangan/berhasil', [bookController::class, 'berhasil'])->name('berhasil');
    Route::get('/book-lapangan/detail', [bookController::class, 'bookdetail'])->name('bookdetail');
    Route::get('/book-lapangan/gagal', [bookController::class, 'gagal'])->name('gagal');
    Route::get('pilih-tanggal/{lapangan_id}', [BookController::class, 'pilih'])->name('pilih-tanggal');
    Route::get('verifikasi', [BookController::class, 'verifikasi'])->name('verifikasi');
    Route::get('berhasil', [BookController::class, 'berhasil'])->name('berhasil');
    Route::get('gagal', [BookController::class, 'gagal'])->name('gagal');
    Route::get('book-detail', [BookController::class, 'bookdetail'])->name('book-detail');

    Route::post('/booking/pilih/{lapangan_id}', [BookController::class, 'pilih'])->name('pilih');
    Route::post('/booking/bayar', [BookController::class, 'bayar'])->name('bayar');
    Route::post('/booking/verifikasi', [BookController::class, 'verifikasi'])->name('verifikasi');
    Route::get('/booking/berhasil', [BookController::class, 'berhasil'])->name('berhasil');
    Route::get('/booking/gagal', [BookController::class, 'gagal'])->name('gagal');
    Route::get('/booking/detailbook', [BookController::class, 'bookdetail'])->name('bookdetail');

    Route::get('/book/lapangan/{lapangan_id}', [BookController::class, 'pilih'])->name('pilih');
    Route::post('/book/bayar', [BookController::class, 'bayar'])->name('bayar');
    Route::post('/book/verifikasi', [BookController::class, 'verifikasi'])->name('verifikasi');
    Route::get('/book/berhasil', [BookController::class, 'berhasil'])->name('berhasil');
    Route::get('/book/gagal', [BookController::class, 'gagal'])->name('gagal');
    Route::get('/book/detail', [BookController::class, 'bookdetail'])->name('bookdetail');

});

// admin role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
    Route::get('/admin/user/tambah', [AdminController::class, 'tambahuser'])->name('admin.tambahuser');
    Route::post('/admin/user', [AdminController::class, 'storeuser'])->name('admin.storeuser');
    Route::get('/admin/user/edit/{id}', [AdminController::class, 'edituser'])->name('admin.edituser');
    Route::put('/admin/user/{id}', [AdminController::class, 'updateuser'])->name('admin.updateuser');
    Route::delete('/admin/user/{id}', [AdminController::class, 'deleteuser'])->name('admin.deleteuser');
    Route::get('/admin/jadwal', [AdminController::class, 'jadwal'])->name('admin.jadwal');
    Route::get('/admin/jadwal/tambah', [AdminController::class, 'tambahJadwal'])->name('admin.tambahjadwal');
    Route::post('/admin/jadwal', [AdminController::class, 'storeJadwal'])->name('admin.storejadwal');
    Route::get('/admin/jadwal/edit/{id}', [AdminController::class, 'editJadwal'])->name('admin.editjadwal');
    Route::put('/admin/jadwal/{id}', [AdminController::class, 'updateJadwal'])->name('admin.updatejadwal');
    Route::delete('/admin/jadwal/{id}', [AdminController::class, 'deleteJadwal'])->name('admin.deletejadwal');
    Route::get('/admin/lapangan', [AdminController::class, 'index'])->name('admin.lapangan');
    Route::get('/admin/lapangan/tambah', [AdminController::class, 'create'])->name('admin.tambahlap');
    Route::post('/admin/lapangan/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/lapangan/edit/{id}', [AdminController::class, 'edit'])->name('admin.editlap');
    Route::put('/admin/lapangan/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/lapangan/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/verification', [AdminController::class, 'verification'])->name('admin.verification');
    Route::post('/admin/verify/{id}/{status}', [AdminController::class, 'verifyPembayaran'])->name('admin.verify');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::put('/profil', [UserController::class, 'updateProfil'])->name('profil.update');
});
