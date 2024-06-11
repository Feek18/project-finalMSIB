<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class HomeController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::all();
        return view('home', compact('lapangan'));
    }

    public function sewa(Request $request)
    {
        $lapangan = Lapangan::all();
        return view('sewa', compact('lapangan'));
    }
}
