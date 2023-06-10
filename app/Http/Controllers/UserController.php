<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create()
    {


        // Get me products that signed-in user rented.


        return view("profile.create", [
            "rents" => $myRents
        ]);
    }
}
