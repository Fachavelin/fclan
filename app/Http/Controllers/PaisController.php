<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    //
    public function show(Pais $pais){

        return view('welcome',[
            'titulo'=>"Publicaciones por pais '{$pais->nombre}'",
            'clans'=>$pais->clans()->paginate(3)

        ]);
    }
}
