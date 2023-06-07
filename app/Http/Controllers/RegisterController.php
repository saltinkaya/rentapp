<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {

             return view("register.create");
    }


    public function store()
    {
        $attributes = \request()->validate([
            "name"=>["required","min:3","max:255"],
            "email"=>["required","email","unique:users,email"],
            "password"=>["required","min:6","max:255"]
        ]);

        auth()->login(User::create($attributes));

        return redirect("/");
        // validate
        // create a user
        // auth->login
    }
}
