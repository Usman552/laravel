<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('dashboard');


Route::prefix('users')->group(function(){

    Route::get('/', [UserController::class,'index'])->name('users');

    Route::get('/register', [UserController::class,'create'])
        ->name('users.register');

    Route::post('/register', [UserController::class,'store'])
        ->name('users.store');
});
