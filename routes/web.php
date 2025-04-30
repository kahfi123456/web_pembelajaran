<?php

use App\Http\Controllers\ProfileController;

use App\Livewire\Fakultas\DetailFakultas;
use App\Models\jurusan;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Beranda;
use App\Livewire\Fakultas;
use Illuminate\Support\Facades\Auth;

// Halaman default (Welcome page)
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',Beranda::class)->name('beranda');
// Route::get('fakultas',Fakultas::class)->name('fakultas');
// Route::get('/fakultas', function () {
//     return view('livewire.fakultas');
// })->middleware('auth');
Route::get('/fakultas', fakultas::class)->name('fakultas');
Route::get('/fakultas/{slug}', DetailFakultas::class)->name('jurusan');


// Grup route untuk profile yang hanya bisa diakses oleh user yang sudah login
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';