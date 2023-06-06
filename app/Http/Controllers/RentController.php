<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function store() {
       User::create([
           "name"=>"sabri",
           "email"=>"salt@gmail.com",
           "password"=>"123123"
       ]);
    }
}
