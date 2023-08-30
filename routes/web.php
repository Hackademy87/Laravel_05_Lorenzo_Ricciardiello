<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VestitiController;
use App\Http\Controllers\PersonalController;

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

Route::get('/', [PersonalController::class,'welcome'])->name('home');

Route::get('/swear/create', [VestitiController::class,'create'])->name('vestiti.create');

Route::post('/swear/store',[VestitiController::class,'store'])->name('vestiti.store');