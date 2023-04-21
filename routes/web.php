<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FallBackController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

#--USERS--ROUTE--START--HERE
Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('astrohub');
    Route::get('register', 'register')->name('register');
    Route::post('store', 'store')->name('store');
    Route::get('login', 'login')->name('login');
    Route::post('auth-login', 'authLogin')->name('auth-login');
    Route::get('logout', 'logout')->name('logout');
});
#--ENDS--HERE

#--LEARNERS--ROUTE--START--HERE
Route::middleware(['auth', 'learner'])->group(function () {
    Route::controller(LearnerController::class)->group(function () {
        Route::prefix('astrohub/learner')->group(function () {
            Route::get('dashboard', 'dashboard');
            #--Lorem ip sum--
        });
    });
});
#ENDS--HERE

#--ADMIN--ROUTE--START--HERE
Route::middleware(['auth', 'admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::prefix('astrohub/admin')->group(function () {
            Route::get('dashboard', 'dashboard');
            #--Lorem ip sum--

        });
    });
});
#ENDS--HERE

#--FALLBACK--ROUTE--START-HERE
Route::fallback(FallBackController::class);
#--ENDS--HERE
