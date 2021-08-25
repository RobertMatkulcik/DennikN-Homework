<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function list()
    {


//        Sorted on relation
//        $order = 'asc';
//        $users = User::join('subscriptions', 'subscriptions.user_id', '=', 'users.id')->select('users.*')->groupBy("subscriptions.user_id")->orderBy("end", $order)->get();

        $users = User::orderBy("closest_subscription_end", "asc")->get();


        return view('home', [
            'users' => $users
        ]);

    }

    public function register()
    {
        return view('register');
    }
    public function store()
    {
        $validatedPost = $this->validate(request(), [
//            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'email' => $validatedPost['email'],
            'password' => Hash::make($validatedPost['password']),
        ]);

//        auth()->login($user);

        return redirect()->to('/');
    }

}
