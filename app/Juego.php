<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    //
    public function clans(){
        return $this->belongsToMany(Clan::class);
    }
}
