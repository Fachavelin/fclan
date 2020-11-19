<?php

namespace App\Http\Controllers;
use App\Clan;
use App\Juego;
use Illuminate\Http\Request;

class ClansController extends Controller
{
    //
    public function show(Clan $clan)
    {
        if(request()->wantsJson()){
            return $clan;
        }
        return view('clans.show',compact(['clan']));
    }
}
