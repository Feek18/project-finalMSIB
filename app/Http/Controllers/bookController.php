<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
   public function pilih(Request $request){
    return view('components.user.pilihtanggal');
   }
}