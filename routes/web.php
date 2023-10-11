<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tambah/agensi', [App\Http\Controllers\AgencyController::class, 'create'])->name('agency.create');
Route::post('/simpan/agensi', [App\Http\Controllers\AgencyController::class, 'store'])->name('agency.store');

Route::get('/kemaskini/agensi/{agency}', [App\Http\Controllers\AgencyController::class, 'show'])->name('agency.show');
Route::post('/kemaskini/agensi/{agency}', [App\Http\Controllers\AgencyController::class, 'update'])->name('agency.update');

