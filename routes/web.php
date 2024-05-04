<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\contactController;


// Route yo Countroll all Home page website part
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Home')->name('home.index');
});

Route::controller(contactController::class)->group(function () {
    Route::post('/send-email', 'store')->name('contact.send');
});


// Route yo Countroll all Dashboard part
Route::middleware(['NoAuth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin', 'dashboard')->name('dashboard.index');
    });
});

Route::middleware(['NoAuth'])->group(function () {
    Route::controller(ProjectsController::class)->group(function () {
        Route::get('/projects', 'projects')->name('projects.index');
        Route::post('/projects', 'store')->name('add_projects.index');
    });
});

// Route yo Countroll all login part
Route::middleware('Auth')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login.index');
        Route::post('/login', 'store')->name('loginStore.index');
        Route::get('/logout', 'loginout')->name('loginout.index');
    });
});

// Route yo Countroll all logout part
Route::controller(LoginController::class)->group(function () {
    Route::get('/logout', 'loginout')->name('loginout.index');
});


Route::controller(SignInController::class)->group(function () {
    Route::get('/signin', 'signIn')->name('sign-in.index');
    Route::post('/signin', 'store')->name('signInStore.index');
});
