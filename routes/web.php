<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;
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
// sewa
Route::get('/sewa-lap', [homeController::class, 'sewa'])->name('sewa');


// admin role
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/jadwal', [AdminController::class, 'jadwal'])->name('admin.jadwal');
Route::get('/admin/verification', [AdminController::class, 'verification'])->name('admin.verification');
