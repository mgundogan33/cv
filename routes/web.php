<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');

// Route::group(['middleware' => 'auth', 'isAdmin'], function () {
// });

// Admin
Route::resource('/admin_home', HomeController::class);
Route::resource('/admin_information', InformationController::class);
Route::resource('/admin_about', AboutController::class);