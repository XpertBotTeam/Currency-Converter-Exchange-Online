<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class SocialiteController extends Controller
{
     public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback ($provider) 
    {

        try{
        $socialiteUser =  Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/index11');
        }
        $user = User::where([
    
            'provider' => $provider,
            'provider_id' => $socialiteUser->getId(),
    
        ])->first();
    
        if(!$user){
    
            if(!$user){
                $validator = Validator::make(
                    ['email' => $socialiteUser->getEmail()],
                    ['email' => ['unique:users,email']],
                    ['email,unique' => 'we cannot sign in: use a different login user '],
                );
                if($validator->fails()){
                    return redirect('/index11')->withErrors($validator);
                }
            }
    
            \App\Models\User::create([
                'name' => $socialiteUser->getName(),
                'email' => $socialiteUser->getEmail(),
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'email_verified_at' => now()
            ]);
        }
        Auth::login($user);
    
        return redirect('/');
    }
}
