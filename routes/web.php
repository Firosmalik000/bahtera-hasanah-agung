<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\WhyUsController;
use App\Http\Controllers\ServiceController;
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
    Route::get('/admin/master', [MasterController::class, 'index'])->name('admin.master');
    Route::post('/admin/master', [MasterController::class, 'store'])->name('admin.master.store');
    Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service');
    Route::post('/admin/service', [ServiceController::class, 'store'])->name('admin.service.store');
    Route::get('/admin/whyUs', [WhyUsController::class, 'index'])->name('admin.whyUs');
    Route::post('/admin/whyUs', [WhyUsController::class, 'store'])->name('admin.whyUs.store');
});

require __DIR__.'/auth.php';
