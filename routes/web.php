<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('auth.register.index');
    Route::post('/register/store', 'store')->name('auth.register.store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('auth.login.index');
    Route::post('/login/store', 'store')->name('auth.login.store');
    Route::get('/logout', 'logout')->name('auth.logout.index');
});

Route::middleware(['auth:member'])->prefix('auth')->group(function () {

    Route::controller(LinkController::class)->group(function () {
        Route::get('/links/delete/{link}', 'delete')->name('auth.links.delete');
        Route::get('/links/create', 'create')->name('auth.links.create');
        Route::post('/links/store', 'store')->name('auth.links.store');
        Route::get('/links', 'index')->name('auth.links.index');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('auth.dashboard.index');
        Route::post('/', 'update')->name('auth.dashboard.update');
    });

});

Route::controller(\App\Http\Controllers\Admin\LoginController::class)->group(function () {
    Route::get('/admin/login', 'index')->name('auth.login.admin.index');
    Route::post('/admin/login/store', 'store')->name('auth.login.admin.store');
    Route::get('/admin/logout', 'logout')->name('auth.logout.admin.index');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::controller(\App\Http\Controllers\Admin\LinkController::class)->group(function () {
        Route::get('/links/delete/{link}', 'delete')->name('auth.admin.links.delete');
        Route::get('/links', 'index')->name('auth.admin.links.index');
    });

    Route::controller(\App\Http\Controllers\Admin\DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('auth.admin.dashboard.index');
        Route::post('/', 'update')->name('auth.admin.dashboard.update');

    });

});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/{shortLink}', [ShortLinkController::class, 'index'])->name('shortlink.index');
