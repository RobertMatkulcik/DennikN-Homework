<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function list()
    {



//        TODO: Order users by subscription->start

        $order = 'desc';
        $users = Subscription::select("user_id")
            ->orderBy('start', $order)
            ->groupBy("user_id")
            ->get();



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
        $this->validate(request(), [
//            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

//        $user = User::create(request(['name', 'email', 'password']));
        $user = User::create(request(['email', 'password']));

//        auth()->login($user);

        return redirect()->to('/');
    }

}
