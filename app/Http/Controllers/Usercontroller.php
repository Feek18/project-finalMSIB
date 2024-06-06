<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class Usercontroller extends Controller
{
    public function home1(Request $request){
        return view('home');
    }
    public function profil(Request $request){
        return view('components.user.profil');
    }

}
