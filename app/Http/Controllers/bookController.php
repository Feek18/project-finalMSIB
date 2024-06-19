<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Peminjaman;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class BookController extends Controller
{
    public function pilih(Request $request, $lapangan_id) {
        $lapangan = Lapangan::findOrFail($lapangan_id);
        $jadwal = Jadwal::where('lapangan_id', $lapangan_id)->get();
        return view('components.user.pilihtanggal', compact('lapangan', 'jadwal'));
    }

    public function bayar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lapangan_id' => 'required|exists:lapangan,id',
            'jadwal_id' => 'required|exists:jadwal,id',
            'tanggal_peminjaman' => 'required|date',
            'selected_times' => 'required|json',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
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

            DB::commit();
            return view('components.user.pembayaran', compact('peminjaman', 'selectedTimes'));
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan saat memproses pembayaran.')->withInput();
        }
    }

    public function verifikasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'peminjaman_id' => 'required|exists:peminjaman,id',
            'jadwal_id' => 'required|exists:jadwal,id',
            'jumlah' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'no_rek' => 'required|string',
            'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $selectedTimes = json_decode($request->selected_times, true);

            // Handle file upload
            if ($request->hasFile('bukti_pembayaran')) {
                $file = $request->file('bukti_pembayaran');
                $filePath = $file->store('bukti_pembayaran', 'public');
            }

            $pembayaran = Pembayaran::create([
                'peminjaman_id' => $request->peminjaman_id,
                'user_id' => auth()->user()->id,
                'jadwal_id' => $request->jadwal_id,
                'jumlah' => $request->jumlah,
                'tanggal_pembayaran' => now(),
                'metode_pembayaran' => $request->metode_pembayaran,
                'no_rek' => $request->no_rek,
                'bukti_pembayaran' => $filePath ?? null,
                'status' => 'pending',
            ]);

            DB::commit();
            return view('components.user.verifikasi', compact('pembayaran', 'selectedTimes'));
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan saat memverifikasi pembayaran.')->withInput();
        }
    }

   public function status() {
        $peminjaman = Peminjaman::where('user_id', auth()->user()->id)->get();
        return view('components.user.status', compact('peminjaman'));
    }

    
}
