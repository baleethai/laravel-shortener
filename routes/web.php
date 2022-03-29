<?php

use App\Http\Controllers\Auth\LinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
});

Route::get('/{shortLink}', [ShortLinkController::class, 'index'])->name('shortlink.index');
