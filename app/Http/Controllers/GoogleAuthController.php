<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\SocialiteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
//    public function callback($provider)
//    {
//
//        $user = $this->handleProviderCallback(Socialite::driver($provider));
//
//        auth()->login($user);
//
//        return redirect()->to('/');
//    }

    public function redirectToProvider()
    {

        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {

       try{
           $user = Socialite::driver('google')->user();

       }catch (\Exception $e){
          return redirect('/login');
       };


        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            $existingUser->is_active =1;


            // log them in
            auth()->login($existingUser, true);
            $existingUser->save();

        } else {
            // create a new user

            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->provider_id       = $user->id;
            $newUser->provider          = 'google';
            $newUser->password          = $user->token;
            $newUser->save();
            if($newUser){
                $newUser->is_active=1;
                auth()->login($newUser, true);
                $newUser->save();

                return redirect('/');
            }

        }
        return redirect()->to('/home');







//        $providerUser = $provider->user();
//
//        $providerName = class_basename($provider);
//
//        $user = User::whereProvider($providerName)
//            ->whereProviderId($providerUser->getId())
//            ->first();
//
//        if (!$user) {
//            $user = User::create([
//                'email' => $providerUser->getEmail(),
//                'name' => $providerUser->getName(),
//                'provider_id' => $providerUser->getId(),
//                'provider' => $providerName
//            ]);
//        }
//
//        return $user;
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
