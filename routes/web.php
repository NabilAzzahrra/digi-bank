<?php

use App\Http\Controllers\MenabungController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('nasabah', NasabahController::class);
    Route::resource('tabungan', TabunganController::class);
    Route::resource('menabung', MenabungController::class);
    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('transfer', TransferController::class);
});

require __DIR__.'/auth.php';
