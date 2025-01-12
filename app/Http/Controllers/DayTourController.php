<?php

namespace App\Http\Controllers;

use App\Models\DayTour;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class DayTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = DayTour::all();
        return view('day_tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('day_tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'discount' => 'required|integer',
            'slogan' => 'required|string|max:255',
            'summary' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'start_date' => 'date',
            'end_date' => 'date|after_or_equal:start_date',
            'image' => 'required|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'banner' => 'required|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $slugreplace = str_replace(' ', '-', $request->name);
        $slug=Str::lower($slugreplace);
        
        $data = $request->all();
        $data['slug'] = $slug;
       
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/tours', 'public');
        }

        // Handle image upload
        if ($request->hasFile('banner')) {
            $data['banner_image'] = $request->file('banner')->store('images/tours/banner', 'public');
        }

        DayTour::create($data);

        return redirect()->route('day_tours.index')->with('success', 'Tour created successfully.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(DayTour $DayTour)
    {
        return view('day_tours.show', compact('DayTour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DayTour $DayTour)
    {
        return view('day_tours.edit', compact('DayTour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DayTour $DayTour)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'discount' => 'required|integer',
            'slogan' => 'required|string|max:255',
            'summary' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'start_date' => 'date',
            'end_date' => 'date|after_or_equal:start_date',
            'image' => 'mimes:jpg,jpeg,png,webp,avif|max:2048',
            'banner' => 'mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $data = $request->all();

        // Handle image update
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/tours', 'public');
        }
        if ($request->hasFile('banner')) {
            $data['banner_image'] = $request->file('banner')->store('images/tours/banner', 'public');
        }

        $DayTour->update($data);

       
        return redirect()->back()->with('success', 'Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DayTour $dayTour)
    {
        //
    }
}
