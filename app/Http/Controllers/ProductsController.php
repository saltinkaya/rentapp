<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function create()
    {
        return view("products.create", [
            "categories" => Category::all()
        ]);
    }

    public function store()
    {
        // VALIDATE

        $attributes = request()->validate([
            "title" => ["required", "min:3", "max:255"],
            "description" => ["required", "min:3"],
            'image' => 'required|image',
            "price" => ["required", "numeric", "min:0"],
        ]);


        // Get the image file
        $file = \request()->file("image");

        //Make file name related to the Time & Title.
        $imageName = time() . Str::slug(\request()->title) . "." . $file->getClientOriginalExtension();

        // Store image in the disk
        Storage::disk("public")->putFileAs("images", $file, $imageName);

        $attributes['slug'] = Str::slug(request()->title);
        $attributes["image"] = $imageName;
        $attributes["user_id"] = \request()->user()->id;
        $attributes["category_id"] = \request()->category;

        Product::create($attributes);

        return redirect("/");

    }

    public function edit(Product $product) {
        return view("products.edit", [
            "product" => $product,
            "categories"=>Category::all()
        ]);
    }

    public function update(Product $product) {

//        dd(\request()->file("image"));
        if (\request()->file("image")) {

            // Get the image file
            $file = \request()->file("image");

            //Make file name related to the Time & Title.
            $imageName = time() . Str::slug(\request()->title) . "." . $file->getClientOriginalExtension();

            // Store image in the disk
            Storage::disk("public")->putFileAs("images", $file, $imageName);

        }

        else {

            $imageName = $product->image;
        }



        $attributes = \request()->validate([
            "title" => ["required", "min:3", "max:255"],
            "description" => ["required", "min:3"],
            "price" => ["required", "numeric", "min:0"],
        ]);

        $attributes["image"] = $imageName;
        $attributes["category_id"] = \request()->category;

        $product->update($attributes);

        return \redirect("/profile/listings");


    }

    public function destroy(Product $product) {

        $product->delete();

        return redirect("/");
    }
}
