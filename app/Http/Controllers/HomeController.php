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
        $destinations = [];

        //foreach ($destinations as $key => $destination) {
        //    $iDest = rand(1,6);
        //}
        for ($i=0; $i < 6; $i++) { 
            $indexRandomDest = rand(1,6);
            //$array[] += $destinations->find($indexRandomDest);
            array_push($destinations,Destination::all()->find($indexRandomDest));
        }
        //dump($array);
        return view('home',[
            "destinations" => $destinations,
            "reviews" => $reviews,
            "packages" => $packages,
        ]);
    }

    public function homeTravel(){
        $reviews = Review::all();
        $packages = Package::all();
        $destinations = [];

        //foreach ($destinations as $key => $destination) {
        //    $iDest = rand(1,6);
        //}
        for ($i=0; $i < 6; $i++) { 
            $indexRandomDest = rand(1,6);
            //$array[] += $destinations->find($indexRandomDest);
            array_push($destinations,Destination::all()->find($indexRandomDest));
        }
        //dump($array);
        return view('layouts.site',[
            "destinations" => $destinations,
            "reviews" => $reviews,
            "packages" => $packages,
        ]);
    }
}
