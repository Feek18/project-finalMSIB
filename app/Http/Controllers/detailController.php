<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class detailController extends Controller
{
    public function detail(Request $request, $id) {
        $lapangan = Lapangan::find($id);
        return view('components.user.detaillap', compact('lapangan'));
    }
}
