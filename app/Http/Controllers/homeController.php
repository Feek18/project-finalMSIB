<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class homeController extends Controller
{
     public function sewa() {
        $lapangan = Lapangan::all();
        return view('sewa', compact('lapangan'));
    }
}
