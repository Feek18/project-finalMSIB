<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    public function detail(Request $request) {
        return view('components.user.detaillap');
    }
}
