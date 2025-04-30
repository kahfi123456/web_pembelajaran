<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Memastikan autentikasi
        $request->authenticate();

        // Regenerasi session setelah login berhasil
        Session::regenerate(); // Ganti $request->session()->regenerate() dengan Session::regenerate()

        // Cek peran pengguna dan arahkan ke halaman yang sesuai
        if (Auth::user()->role == 'admin') { // Pastikan role menggunakan kolom 'role' di tabel users
            return redirect()->to('/admin');
        }

        if (Auth::user()->role == 'mahasiswa') {
            return redirect()->to('/beranda');
        }

        // Jika tidak ada peran yang sesuai, alihkan ke dashboard (default)
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout pengguna
        Auth::guard('web')->logout();

        // Hapus session dan buat token baru
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}