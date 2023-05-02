<?php

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

Route::get('/cervecerías', function (){
    $breweries = [
        ['id' => 1, 'nombre' => 'Thor\'s Beer', 'poblacion' => 'Madrid'],
        ['id' => 2, 'nombre' => 'Capa y espada', 'poblacion' => 'Barcelona'],
        ['id' => 3, 'nombre' => 'Santidad', 'poblacion' => 'Sevilla'],
        ['id' => 4, 'nombre' => 'Cervecería El Diablo', 'poblacion' => 'Valencia'],
        ['id' => 5, 'nombre' => 'Elaboración de meteoritos', 'poblacion' => 'Zaragoza'],
        ['id' => 6, 'nombre' => 'Ambrosia', 'poblacion' => 'Soria']
    ]; 
    return view('breweries', ['breweries' => $breweries]);
})->name('breweries');

Route::get('/cervecerías/{id}', function ($id){
    $breweries = [
        ['id' => 1, 'nombre' => 'Thor\'s Beer', 'poblacion' => 'Madrid'],
        ['id' => 2, 'nombre' => 'Capa y espada', 'poblacion' => 'Barcelona'],
        ['id' => 3, 'nombre' => 'Santidad', 'poblacion' => 'Sevilla'],
        ['id' => 4, 'nombre' => 'Cervecería El Diablo', 'poblacion' => 'Valencia'],
        ['id' => 5, 'nombre' => 'Elaboración de meteoritos', 'poblacion' => 'Zaragoza'],
        ['id' => 6, 'nombre' => 'Ambrosia', 'poblacion' => 'Soria']
    ]; 

    $brewery = null;
    $i = 0;
    while (($i < count($breweries)) && ($brewery == null)) {
        if ($id == $breweries[$i]['id']){
            $brewery = $breweries[$i];
        }
    $i++;
    }
    return view('brewery', ['brewery' => $brewery]);
})->name('brewery');


Route::get('/about', function () {
    return view('about');
})->name('about');
