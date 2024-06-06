<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
   public function pilih(Request $request){
    return view('components.user.pilihtanggal');
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
   public function gagal(Request $request) {
      return view('components.user.gagal');
   }
}
