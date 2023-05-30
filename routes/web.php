<?php

use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

Route::get('/cervecerías', [BreweryController::class, 'index'])->name('breweries');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/cervecerías/create', [BreweryController::class, 'create'])->name('breweries.create');
    Route::post('/cervecerías/store', [BreweryController::class, 'store'])->name('breweries.store');

    Route::get('/cervecerías/edit/{brewery}', [BreweryController::class, 'edit'])->name('breweries.edit');
    Route::put('/cervecerías/update/{brewery}', [BreweryController::class, 'update'])->name('breweries.update');

    Route::delete('/cervecerías/delete/{brewery}', [BreweryController::class, 'delete'])->name('breweries.delete');
});

Route::get('/cervecerías/{brewery}', [BreweryController::class, 'show'])->name('breweries.show');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
