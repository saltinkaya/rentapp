<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function create(Product $product)
    {
     return view ("products.details.create",[
         "product" => $product
    ]);
    }
}
