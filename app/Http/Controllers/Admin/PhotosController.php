<?php

namespace App\Http\Controllers\Admin;
use App\Clan;
use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    //
    
    public function store(Clan $clan){

        $this->validate(request(),[
            'photo'=>'required|image|max:2048'
        ]);

        $photo = request()->file('photo')->store('public');
        $photoUrl= Storage::url($photo);
        
        Photo::create([
            'url'=>Storage::url($photo),
            'clan_id'=>$clan->id
        ]);
    } 
    public function destroy(Photo $photo, Clan $clan)
    {
        $photo->delete();

        $photoPath = str_replace('storage','public',$photo->url);

        Storage::delete($photoPath);

        return redirect()->route('admin.clans.index');

    }
    /*
    public function store(Clan $clan)
    {
        $this->validate(request(),[
            'photo'=>'required|image|max:2048'
        ]);

        $photo = request()->file('photo')->store('public');



        Photo::create([
            'url'=>Storage::url($photo),
            'clan_id'=>$clan->id
        ]);
    }
    public function destroy(Photo $photo)
    {
        $photo->delete();

        $photoPath = str_replace('storage','public',$photo->url);

        Storage::delete($photoPath);

        return redirect()->route('admin.clans.index');

    }*/
}
