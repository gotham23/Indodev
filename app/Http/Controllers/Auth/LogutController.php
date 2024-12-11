<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    public function logout()
    {
        // Hapus cookie yang menyimpan ID pengguna
        Cookie::queue(Cookie::forget('user_id'));

        // Logout pengguna
        Auth::logout();

        // Redirect ke halaman login
        return redirect()->route('login');
    }
}
