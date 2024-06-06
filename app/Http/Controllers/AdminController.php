<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        return view('components.admin.dashboard');
    }
    public function user(Request $request) {
        return view('components.admin.user');
    }
    public function edituser(Request $request) {
        return view('components.admin.edituser');
    }
    public function tambahuser(Request $request) {
        return view('components.admin.tambahuser');
    }
    public function jadwal(Request $request) {
        return view('components.admin.jadwal');
    }
    public function tambah(Request $request) {
        return view('components.admin.tambah');
    }
    public function edit(Request $request) {
        return view('components.admin.edit');
    }
    public function verification(Request $request) {
        return view('components.admin.verification');
    }
}
