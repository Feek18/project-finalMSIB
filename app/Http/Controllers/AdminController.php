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
    public function jadwal(Request $request) {
        return view('components.admin.jadwal');
    }
    public function verification(Request $request) {
        return view('components.admin.verification');
    }
}
