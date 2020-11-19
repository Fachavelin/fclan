<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Photo extends Model
{
    //
    protected $guarded = [];

    /*
    public static function boot(){
        static::deleting(function($photo){
            Storage::disk('public')->delete($photo->url);
        });
    }*/
}
