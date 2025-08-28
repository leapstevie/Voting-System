<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;

// Root route → login form
Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [AdminLoginController::class, 'login'])->name('login.submit');

// Group admin routes under /admin prefix
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::get('TEmployee', [AdminHomeController::class, 'TEmployee'])->name('TEmployee');
    Route::get('TRecords', [AdminHomeController::class, 'TRecords'])->name('TRecords');
});

// Group frontend routes under /frontend prefix
Route::prefix('frontend')->name('frontend.')->group(function () {
    Route::get('userRate', [FrontendHomeController::class, 'listHighLevelUsers'])->name('userRate');
    Route::get('userRate/index', [FrontendHomeController::class, 'index'])->name('userRate.index');
    Route::post('userRate/store', [FrontendHomeController::class, 'store'])->name('userRate.store');    
});
