<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function create() {

        // Get me all products that signed-in user rented.

        $user = \auth()->user();
//      $user->load("rents.product"); // prevents n+1 problem

        $rents = $user->rents;

        $myProducts = [] ;
        foreach ($rents as $rent) {
           $myProducts[] = $rent->product ;
        }


      return view ("test", [
          "products" => $myProducts
      ]);
    }
}
