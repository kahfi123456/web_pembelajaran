<?php

use App\Http\Controllers\ProfileController;

use App\Http\Livewire\TentangKami;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Mahasiswalogin;
use App\Livewire\Auth\Mahasiswaregister;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Fakultas\DetailFakultas;
use App\Livewire\Jurusan\MateriJurusan;
use App\Models\jurusan;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Beranda;
use App\Livewire\Fakultas;
use App\Livewire\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Halaman default (Welcome page)
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/mahasiswaregister', Mahasiswaregister::class)->name('mahasiswaregister');
Route::get('/mahasiswalogin', Mahasiswalogin::class)->name('mahasiswalogin');
Route::get('/forgotpassword', ForgotPassword::class)->name('forgotpassword');
Route::get('/reset-password/{token}', ResetPassword::class)->name('reset.password');
Route::get('/jurusan/{id}/materi', MateriJurusan::class)->name('jurusan.materi');
Route::post('/logout', function (Request $request) {
    auth::guard('mahasiswa')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/mahasiswalogin');
})->name('logout');

// Route::middleware(['auth'])->group(function () {
//     // Route::get('/', function(){
//     //     return redirect('/Login');
//     });
    Route::get('/',Beranda::class)->name('beranda');
    // Route::get('fakultas',Fakultas::class)->name('fakultas');
    // Route::get('/fakultas', function () {
    //     return view('livewire.fakultas');
    // })->middleware('auth');
    Route::get('/fakultas', fakultas::class)->name('fakultas');
    Route::get('/fakultas/{slug}', DetailFakultas::class)->name('jurusan');
    Route::get('/tentang-kami', TentangKami::class)->name('tentangkami');
    Route::get('/kontak', Kontak::class)->name('kontak');

    
    // Grup route untuk profile yang hanya bisa diakses oleh user yang sudah login
    // Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });

 ;



require __DIR__.'/auth.php';