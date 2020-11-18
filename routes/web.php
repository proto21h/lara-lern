<?php

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
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\WellcomeController;

Route::get('/', [WellcomeController::class, 'index'])->name('home');

Route::get('/check-age', function () {
    return view('checkAge');
});

 
Route::post('/check-age', function () {
    return view('checkAge');
})->middleware(CheckAge::class);