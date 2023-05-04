<?php

use App\Http\Controllers\BreweryController;
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
    return view('home');
})->name('home');

Route::get('/cervecerías', [BreweryController::class, 'list'])->name('breweries');

Route::get('/cervecerías/{id}', [BreweryController::class, 'details'])->name('brewery');


Route::get('/about', function () {
    return view('about');
})->name('about');
