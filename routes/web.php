<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', [HomeController::class, 'home'])->name('user.home');
Route::get('login', [AuthController::class, 'userLogin'])->name('user.login');
Route::post('login-submit', [AuthController::class, 'userLoginSubmit'])->name('user.login.submit');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
});