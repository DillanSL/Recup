<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moviesController extends Controller
{
  public function listado(){
    $vac = movie::all();
    return view('peliculas', compact('movies'));
  }
}
