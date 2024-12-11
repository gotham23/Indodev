<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class DashboardController extends Controller
{
    // Menampilkan halaman dashboard
    public function index()
    {
        // Periksa apakah pengguna sudah login dengan cookie
        $userId = Cookie::get('user_id');

        if ($userId) {
            // Jika ada cookie user_id, autentikasi pengguna
            $user = \App\Models\User::find($userId);
            if ($user) {
                Auth::login($user);
                return view('dashboard', compact('user')); // Tampilkan halaman dashboard dengan data pengguna
            }
        }

        // Jika pengguna tidak login, tampilkan dashboard dengan tombol login
        return view('dashboard', ['user' => null]);
    }
}
