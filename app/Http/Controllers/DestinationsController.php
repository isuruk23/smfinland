<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destinations::all();
        return view('destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image1' => 'required|mimes:jpg,jpeg,png,avif,webp',
            'image2' => 'required|mimes:jpg,jpeg,png,avif,webp',
            'city' => 'required|integer',
            'type' => 'required|integer',
        ]);
        $data = $request->all();
//dd($data);
        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $data['slug'] = $slug;


        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('images/destinations', 'public');
        }
        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('images/destinations', 'public');
        }

        Destinations::create($data);

        return redirect()->route('destinations.index')->with('success', 'Destination created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Destination = Destinations::findOrFail($id);
        return view('destinations.show', compact('Destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Destination = Destinations::findOrFail($id);
        return view('destinations.edit', compact('Destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Destination = Destinations::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image1' => 'required|mimes:jpg,jpeg,png,avif,webp',
            'image2' => 'required|mimes:jpg,jpeg,png,avif,webp',
            'city' => 'required|integer',
            'type' => 'required|integer',
        ]);

        

        $data = $request->all();
        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $data['slug'] = $slug;

        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('images/destinations', 'public');
        }
        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('images/destinations', 'public');
        }

        $Destination->update($data);

        return redirect()->route('destinations.index')->with('success', 'Destination updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Destination = Destinations::findOrFail($id);

        if ($Destination->image1) {
            \Storage::delete($Destination->image1);
        }
        if ($Destination->image2) {
            \Storage::delete($Destination->image2);
        }

        $Destination->delete();

        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully.');
    }
}
