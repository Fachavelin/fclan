<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegosController extends Controller
{
    //
    public function show(Juego $juego){

        return view('welcome',[
            'titulo'=>"Publicaciones por juego {$juego->nombre}",
            'clans'=>$juego->clans()->paginate()

        ]);
    }
}
