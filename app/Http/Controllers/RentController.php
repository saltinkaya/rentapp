<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function store(Product $product)
    {

        $attributes = [];
        $attributes["product_id"] = $product->id;
        $attributes["user_id"] = auth()->user()->id;

        Rent::create($attributes);

        return redirect("/");

    }

    public function destroy(Product $product) {
       $product->rent->delete();

       return redirect("/");
    }
}
