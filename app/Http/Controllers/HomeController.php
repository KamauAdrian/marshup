<?php

namespace App\Http\Controllers;

use App\Mail\NewUserWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $user;
    public function __construct()
    {
        $this->middleware('auth')->except('all');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home');

//        if($user->isActive()){
//            return view('home');
//        }

    }

    public function all()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }



    public function email(User $user)
    {

$this->user = $user;
$user = auth()->user();


        Mail::to($user->email)->send(new NewUserWelcome($user));

        return redirect()->back();
    }
}
