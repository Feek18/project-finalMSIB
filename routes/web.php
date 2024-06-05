<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\detailController;
use Illuminate\Support\Facades\Route;

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

//login
Route::get('/login', [daftarController::class, 'login'])->name('login');
//register
Route::get('/register', [daftarController::class, 'register'])->name('register');
// produk sewa view
Route::get('/sewa-lap', [homeController::class, 'sewa'])->name('sewa');
// detail lapangan
Route::get('/detail-lapangan', [detailController::class, 'detail'])->name('detail');
// book
Route::get('/detail-lapangan/pilih', [bookController::class, 'pilih'])->name('pilih');


// admin role
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/jadwal', [AdminController::class, 'jadwal'])->name('admin.jadwal');
Route::get('/admin/verification', [AdminController::class, 'verification'])->name('admin.verification');
