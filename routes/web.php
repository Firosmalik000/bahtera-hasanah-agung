<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisiController;
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
    Route::get('/admin/hero', [HeroController::class, 'index'])->name('admin.hero');
    Route::post('/admin/hero', [HeroController::class, 'store'])->name('admin.hero.store');
    Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');
    Route::post('/admin/about', [AboutController::class, 'store'])->name('admin.about.store');
    Route::get('/admin/visi', [VisiController::class, 'index'])->name('admin.visi');
    Route::post('/admin/visi', [VisiController::class, 'store'])->name('admin.visi.store');
});

require __DIR__.'/auth.php';
