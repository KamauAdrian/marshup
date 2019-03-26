<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function redirectToProvider(){

        return Socialite::driver('github')->redirect();
    }
    public function handleProviderCallback(){


        try{
            $user = Socialite::driver('github')->user();

        }catch (\Exception $e){
            return redirect('/register');
        }

        $existingUser = User::where('email',$user->email)->first();
        if($existingUser){
            $existingUser->is_active = 1;
            auth()->login($existingUser,true);
            $existingUser->save();
            return redirect('/');

        }else{
            //create a new user
            $newUser = new User;
            $newUser->name = $user->name;
            $newUser->email = $user->emial;
            $newUser->provider = 'github';
            $newUser->provider_id = $user->id;
            $newUser->password = $user->token;
            $newUser->save();
            if($newUser){
                $newUser->is_active = 1;
                auth()->login($newUser, true);
                $newUser->save();
                return redirect('/');
            }

        }
    }
}
