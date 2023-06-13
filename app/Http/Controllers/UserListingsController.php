<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserListingsController extends Controller
{
    public function create () {

        $user = auth()->user();


        $listings = $user->products;

//        dd($listings);


        return view("profile.listings",[
            "listings" => $listings
        ]);
    }
}
