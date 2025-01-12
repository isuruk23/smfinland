<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = city::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $city = new city($request->only(['title', 'description']));

        if ($request->hasFile('image1')) {
            $imagePath = $request->file('image1')->store('images/cities', 'public');
            $city->image1 = $imagePath;
        }

        $city->save();

        return redirect()->route('cities.index')
            ->with('success', 'Tour detail created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return view('cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $city->fill($request->only(['title', 'description']));

        if ($request->hasFile('image1')) {
            $imagePath = $request->file('image1')->store('images/cities', 'public');
            $city->image1 = $imagePath;
        }

        $city->save();

        return redirect()->route('cities.index')
            ->with('success', 'Tour detail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        if ($city->image1) {
            \Storage::disk('public')->delete($city->image1);
        }

        $city->delete();

        return redirect()->route('cities.index')
            ->with('success', 'Tour detail deleted successfully.');
    }
    
}
