<?php

namespace App\Http\Controllers;

use App\Http\Requests\BreweryRequest;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use RuntimeException;

class BreweryController extends Controller {
  public function index () {
    $breweries = Brewery::orderby('name')->get();
    return view('breweries.index', ['breweries' => $breweries]);
  }

    public function show (Brewery $brewery) {
        return view('breweries.show', compact('brewery'));
    }

    public function create () {
      return view('breweries.create');
    }

    public function store (BreweryRequest $request) {
      $brewery = new Brewery ();
      $brewery->fill($request->validated());
      if($request->hasFile('img')) {
        $brewery->img = Storage::url($request->file('img')->store('public/breweries')); }
      $brewery->author = Auth::id();
    try {
      $brewery->saveOrFail ();

    } catch (RuntimeException $e) {
      return back()->with('message', 'Los datos no son correctos')->with('code', 500);
    }

    return redirect()->route('breweries')->with('message', 'Cervecería guardada correctamente')->with('code', 0);

  }

  public function edit (Brewery $brewery) {
    return view('breweries.edit', compact('brewery'));
  }

  public function update (BreweryRequest $request, Brewery $brewery) {
    $brewery->fill($request->validated());
    if($request->hasFile('img')) {
      $brewery->img = Storage::url($request->file('img')->store('public/breweries'));
    }
    try {

      $brewery->saveOrFail ();
      
    } catch (RuntimeException $e) {
      return back()->with('message', 'Los datos no son correctos')->with('code', 200);
    }
    return redirect()->route('breweries')->with('message', 'Cervecería actualizada correctamente')->with('code', 0);
  }

  public function delete (Brewery $brewery) {
    try {
      $brewery->deleteOrFail ();
  }  catch (RuntimeException $e) {
    return back()->with('message', 'No ha sido possible borrar la cervecería')->with('code', 500);
    }
    return redirect()->route('breweries')->with('message', 'Cervecería eliminada correctamente')->with('code', 0);
  }
}