<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// ログインページへリダイレクト設定
Route::get('/', function () {
    return redirect()->route('login');
});

// localhost:8000へアクセスしたら、ログイン画面に遷移するように設定
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// dashboardへのルート設定
Route::middleware('auth')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'getUserData'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
