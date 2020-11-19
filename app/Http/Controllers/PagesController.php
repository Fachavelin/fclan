<?php

namespace App\Http\Controllers;

use App\Clan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $clans = Clan::latest('published_at')->paginate(8);
        if(request()->wantsJson()){
            return $clans;
        }
        return view('welcome',compact('clans'));
    }
    public function spa(){
       // $clans = Clan::latest('published_at')->paginate(2);
        return view('pages.spa');
    }
}
