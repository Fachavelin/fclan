<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialLoginController extends Controller
{
    public function redirectToFacebook(){
      return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback(){
        $facebookUser = Socialite::driver('facebook')->user();
        dd($facebookUser);
    }
}
