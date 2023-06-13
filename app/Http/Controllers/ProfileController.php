<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function create()
    {

        // Get me all products that signed-in user rented.


        $user = \auth()->user();
//      $user->load("rents.product"); // prevents n+1 problem

        $rents = $user->rents;

        $myProducts = [];
        foreach ($rents as $rent) {
            $myProducts[] = $rent->product;
        }

//dD(collect($myProducts)->isEmpty());
        return view("profile.create", [
            "products" => $myProducts
        ]);
    }

}
