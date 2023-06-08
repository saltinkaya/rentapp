<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{


    public function index()
    {
        return view("index", [
            "products" => Product::all()
        ]);
    }
    public function create() {
        return view("products.create");
    }

    public function store() {

        $attributes = request()->validate([
            "title" => ["required","min:3","max:255"],
            "description" => ["required","min:3"],
            'image' => 'required|image',
            "price" => ["required","numeric","min:0"]
        ]);

        // Get the image file
        $file = \request()->file("image");


        //Make file name related to the Time & Title.
        $name = time().Str::slug(\request()->title) . "." . $file->getClientOriginalExtension();

        // Store image in the disk
        Storage::disk("public")->putFileAs("images",$file,$name);



        $attributes['slug'] = Str::slug(request()->title);
        $attributes["image"] = $name;
        $attributes["user_id"] = \request()->user()->id;

        Product::create($attributes);

        return redirect("/");

    }
}
