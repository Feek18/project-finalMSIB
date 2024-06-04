<?php

use App\Http\Controllers\daftarController;
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
