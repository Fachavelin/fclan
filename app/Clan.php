<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    //
    protected $guarded =[];
    
    protected $dates = ['published_at'];

    protected $appends =['published_date','owner','game','country','image'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function juego(){
        return $this->belongsToMany(Juego::class);
    }

    public function pais(){
        return $this->belongsToMany(Pais::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function scopeAllowed($query){
        if(auth()->user()->hasRole('Admin')){
            return $query;
        }
        return $query->where('user_id', auth()->id()); 
    }
    public function getPublishedDateAttribute(){
        return optional($this->created_at)->diffForHumans();
    }
    public function getOwnerAttribute(){
        return $this->user;
    }
    public function getGameAttribute(){
        return $this->juego;
    }
    public function getCountryAttribute(){
        return $this->pais;
    }
    public function getImageAttribute(){
        return $this->photos;
    }
    public function getRouteKeyName()
    {
        return 'id';
    }
}
