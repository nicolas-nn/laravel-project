<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();

        return view('admin.destinations',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //le script s'arrete et reviens sur la page courante et donne $errors
        $validated = $request->validate([
            'city' => 'required|max:100',
            'url'  => 'required|max:100',
            'place'=> 'required|max:100',
            'tour' => 'required|max:100',
        ]);

        
        $destination = new Destination;
        $destination->city = $request->city;
        $destination->url = $request->url;
        $destination->place = $request->place;
        $destination->tour = $request->tour;
        $destination->save();
        return redirect('/destinations'); 
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('admin.show',compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('admin.formulaire',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
    
        $destination->city = $request->city;
        $destination->url = $request->url;
        $destination->place = $request->place;
        $destination->tour = $request->tour;
        $destination->save();

        return redirect('/destinations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect('/destinations');
    }
}
