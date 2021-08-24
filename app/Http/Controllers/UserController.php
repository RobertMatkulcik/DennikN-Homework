<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function list()
    {
        return view('home', [
            'users' => User::get()
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
