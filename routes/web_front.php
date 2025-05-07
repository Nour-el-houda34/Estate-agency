<?php

use App\Http\Controllers\Front\EstateController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pro', [HomeController::class, 'pro'])->name('pro');
Route::get('/language/{key}', [HomeController::class, 'language'])->name('language');

#new
#Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/register', [RegisterController::class, 'create'])->name('register');        // pour afficher le formulaire
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');  // pour traiter le formulaire

#Route::post('/register', [AuthController::class, 'register'])->name('register.store');
#new

Route::controller(MessageController::class)->group(function () {
    Route::get('/message', 'index')->name('message')->middleware(ProtectAgainstSpam::class);
    Route::post('/message/store', 'store')->name('message.store')->middleware(ProtectAgainstSpam::class);
    });
Route::controller(EstateController::class)->group(function () {
    Route::get('/estates', 'index')->name('estates');
    Route::get('/estate/{slug}', 'show')->name('estate')->where('slug', '[0-9A-Za-z-]+');
    Route::get('/estate/{slug}/favorite', 'favorite')->name('estate.favorite')->where('slug', '[0-9A-Za-z-]+');
});