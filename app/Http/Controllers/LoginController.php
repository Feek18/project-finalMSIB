<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_telephone' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'no_telephone' => $request->no_telephone,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole('user');

            DB::commit();

            return redirect()->route('login')->with('toast_success', 'Registration successful. Please login.');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }

    public function showRegisterForm()
    {
        return view('register');
    }

      public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard')->with('toast_success', 'Selamat anda berhasil login!');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('home')->with('toast_success', 'Selamat anda berhasil login!');
            }
        }

        return redirect()->back()->with('error', 'Username Atau Password Salah');
    }
    
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            Auth::login($user);
        } else {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => Hash::make(Str::random(24)),
            ]);
            $user->assignRole('user');
            Auth::login($user);
        }

        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('toast_success', 'Berhasil logout!');
    }
}
