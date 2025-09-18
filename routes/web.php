<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Login;

Route::get('/', [beranda::class, 'index'])->name('beranda');

//Login route
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('auth',[AuthController::class, 'auth'])->name('auth');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');
});
