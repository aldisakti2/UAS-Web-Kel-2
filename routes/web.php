<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;


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


Route::get('/contact', [TugasController::class,'contact'])->name('contact');
Route::get('/about', [TugasController::class,'about'])->name('about');
Route::get('/booking', [TugasController::class,'booking'])->name('booking');
Route::get('/', [TugasController::class,'index'])->name('index');
Route::get('/menu', [TugasController::class,'menu'])->name('menu');
Route::get('/service', [TugasController::class,'service'])->name('service');
Route::get('/team', [TugasController::class,'team'])->name('team');
Route::get('/testimoni', [TugasController::class,'testimoni'])->name('testimoni');
Route::post('/create', [TugasController::class,'store'])->name('store');
Route::post('/create_pesan', [TugasController::class,'store_pesan'])->name('store_pesan');
