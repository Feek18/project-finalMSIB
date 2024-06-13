<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Peminjaman;
use App\Models\Pembayaran;

class BookController extends Controller
{
    public function pilih(Request $request, $lapangan_id) {
        $lapangan = Lapangan::findOrFail($lapangan_id);
        $jadwal = Jadwal::where('lapangan_id', $lapangan_id)->get();
        return view('components.user.pilihtanggal', compact('lapangan', 'jadwal'));
    }

    public function bayar(Request $request)
    {
        $peminjaman = Peminjaman::create([
            'user_id' => auth()->user()->id,
            'lapangan_id' => $request->lapangan_id,
            'jadwal_id' => $request->jadwal_id,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'status' => 'pending',
        ]);

        return view('components.user.pembayaran', compact('peminjaman'));
    }

    public function verifikasi(Request $request)
    {
        $pembayaran = Pembayaran::create([
            'peminjaman_id' => $request->peminjaman_id,
            'user_id' => auth()->user()->id,
            'jadwal_id' => $request->jadwal_id,
            'jumlah' => $request->jumlah,
            'tanggal_pembayaran' => now(),
            'metode_pembayaran' => $request->metode_pembayaran,
            'no_rek' => $request->no_rek,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'status' => 'pending',
        ]);

        return view('components.user.verifikasi', compact('pembayaran'));
    }

    public function berhasil() {
        return view('components.user.berhasil');
    }

    public function gagal() {
        return view('components.user.gagal');
    }

    public function bookdetail() {
        return view('components.user.detailbook');
    }
}
