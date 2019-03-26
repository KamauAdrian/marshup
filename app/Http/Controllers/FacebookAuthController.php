<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
   public function redirectToProvider(){


       return Socialite::driver('facebook')->redirect();


   }
   public function handleProviderCallback(){
try{
    $user = Socialite::driver('facebook')->user();
//    dd($user);

}catch (\Exception $e){
    return redirect('/register');
}
//check for existing user
       $existinguser = User::where('name',$user->name && 'password',$user->token);
//      dd($existinguser);
//      if($existinguser){
//          auth()->login($existinguser);
//      }else{}
          //create a new user
$newuser = new User;
$newuser->name = $user->name;
$newuser->password = $user->token;
$newuser->provider = 'facebook';
$newuser->provider_id =$user->id;
$newuser->email='adrian@gmail.com';
$newuser->save();
if($newuser){
    $newuser->is_active = 1;
    auth()->login($newuser);
    $newuser->save();
    return redirect('/');
}




   }
}
