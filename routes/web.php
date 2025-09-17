<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Login;

Route::get('/', [beranda::class, 'index'])->name('beranda');

//Login route
Route::get('/ogin',[AuthController::class, 'login'])->name('login');
Route::post('auth',[AuthController::class, 'auth'])->name('auth');

Route::middleware(['admin'])->group(function() {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
