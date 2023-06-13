<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function create()
    {
        return view("test");
    }

    public function store()
    {
        $arrival = Carbon::parse(request()->arrival);
        $departure = Carbon::parse(request()->departure);
        $interval = $departure->diffInDays($arrival);

        dd($interval);
    }
}
