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
    $selectedTimes = json_decode($request->selected_times, true);
    $startTime = explode(' - ', $selectedTimes[0])[0];
    $endTime = explode(' - ', end($selectedTimes))[1];

    $peminjaman = Peminjaman::create([
        'user_id' => auth()->user()->id,
        'lapangan_id' => $request->lapangan_id,
        'jadwal_id' => $request->jadwal_id,
        'tanggal_peminjaman' => $request->tanggal_peminjaman,
        'waktu_mulai' => $startTime,
        'waktu_selesai' => $endTime,
        'status' => 'pending',
    ]);

    // Update jadwal status to 'booked'
    foreach ($selectedTimes as $time) {
        $jadwal = Jadwal::where([
            ['lapangan_id', '=', $request->lapangan_id],
            ['waktu_mulai', '=', explode(' - ', $time)[0]],
            ['waktu_selesai', '=', explode(' - ', $time)[1]],
        ])->first();

        if ($jadwal) {
            $jadwal->status = 'Dipesan';
            $jadwal->save();
        }
    }

    return view('components.user.pembayaran', compact('peminjaman', 'selectedTimes'));
}



   public function verifikasi(Request $request)
{
    $selectedTimes = json_decode($request->selected_times, true);

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

    return view('components.user.verifikasi', compact('pembayaran', 'selectedTimes'));
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
