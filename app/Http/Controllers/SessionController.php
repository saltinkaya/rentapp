<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("login.create");
    }

    public function store()
    {
        $attributes = \request()->validate([
            "email" => ["required", "email"],
            "password" => "required"
        ]);

        // If not true

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                "email" => "Your provided credentials could not be verified"
            ]);
        }

        // Otherwise log the user in

        session()->regenerate();

        return redirect("/")->with("success", "Welcome back");
    }


    public function destroy()
    {
        auth()->logout();

        return redirect("/");
    }
}
