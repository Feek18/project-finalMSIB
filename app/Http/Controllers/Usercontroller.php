<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Lapangan;


class UserController extends Controller
{
    public function home1()
    {
        $lapangan = Lapangan::all();
        return view('home', compact('lapangan'));
    }
     public function profil()
    {
        $user = Auth::user();
        return view('components.user.profil', compact('user'));
    }

     public function updateProfil(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'no_telephone' => 'required|string|max:255',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telephone = $request->no_telephone;

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'string|min:8|confirmed',
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profil')->with('success', 'Profile updated successfully');
    }
    public function transaksi(Request $request){
        return view('components.user.transaksi');
    }

}
