<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{
    public static  $breweries = [
        ['id' => 1, 'nombre' => 'Uceda', 'poblacion' => 'Madrid'],
        ['id' => 2, 'nombre' => 'Dunne\'s', 'poblacion' => 'Barcelona'],
        ['id' => 3, 'nombre' => 'Triana', 'poblacion' => 'Sevilla'],
        ['id' => 4, 'nombre' => 'Moraima', 'poblacion' => 'Madrid'],
        ['id' => 5, 'nombre' => 'Yunque', 'poblacion' => 'Ponferrada'],
        ['id' => 6, 'nombre' => 'Olego', 'poblacion' => 'Ponferrada'],
        ['id' => 7, 'nombre' => 'The Growler', 'poblacion' => 'Barcelona']
    ]; 

    public function list () {
        return view('breweries', ['breweries' => self::$breweries]);
    }

    public function details ($id) {
        $brewery = null;
        $i = 0;
        while (($i < count(self::$breweries)) && ($brewery == null)) {
            if ($id == self::$breweries[$i]['id']){
                $brewery = self::$breweries[$i];
            }
        $i++;
        }
        return view('brewery', ['brewery' => $brewery]);
    }
}
