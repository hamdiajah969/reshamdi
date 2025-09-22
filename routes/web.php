<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use Illuminate\Auth\Events\Login;

Route::get('/', [beranda::class, 'index'])->name('beranda');

//Login route
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('auth',[AuthController::class, 'auth'])->name('auth');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
    Route::get('/admin/dashboard', [AuthController::class, 'admin'])->name('admin.dashboard');

    Route::get('/admin/user', [AdminController::class, 'userView'])->name('admin.user.index');
    Route::get('/admin/user/edit/{id}',[AdminController::class,'editView'])->name('admin.user.edit');
    Route::put('/admin/user/edit/{id}',[AdminController::class, 'update'])->name('admin.user.update');
    Route::get('/admin/user/destroy/{id}',[AdminController::class,'destroy'])->name('admin.user.destroy');

    Route::get('/admin/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('admin.profile');
    Route::get('/admin/profile/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('admin.profile.create');
    Route::post('/admin/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('admin.profile.store');

    Route::get('/admin/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('admin.siswa');
    Route::get('/admin/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('admin.siswa.create');
});
