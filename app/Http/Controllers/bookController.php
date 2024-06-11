<?php

// app/Http/Controllers/bookController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Lapangan;

class bookController extends Controller
{
    public function pilih(Request $request, $lapangan_id) {
        $lapangan = Lapangan::findOrFail($lapangan_id);
        $jadwal = Jadwal::where('lapangan_id', $lapangan_id)->get();
        return view('components.user.pilihtanggal', compact('lapangan', 'jadwal'));
    }

    public function bayar(Request $request) {
        return view('components.user.pembayaran');
    }

    public function verifikasi(Request $request) {
        return view('components.user.verifikasi');
    }

    public function berhasil(Request $request) {
        return view('components.user.berhasil');
    }

    public function bookdetail(Request $request) {
        return view('components.user.detailbook');
    }

    public function gagal(Request $request) {
        return view('components.user.gagal');
    }
}
