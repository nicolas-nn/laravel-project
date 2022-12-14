<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Review;
use App\Models\Package;

class HomeController extends Controller
{
    public function index(){
        $reviews = Review::all();
        $packages = Package::all();
        $destinations = Destination::inRandomOrder()->limit(6)->get();

        return view('home',[
            "destinations" => $destinations,
            "reviews" => $reviews,
            "packages" => $packages,
        ]);
    }

    public function homeTravel(){
        $reviews = Review::all();
        $packages = Package::all();
        $destinations = Destination::inRandomOrder()->limit(6)->get();

        return view('home',[
            "destinations" => $destinations,
            "reviews" => $reviews,
            "packages" => $packages,
        ]);
    }
}
