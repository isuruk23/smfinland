<?php

namespace App\Http\Controllers;

use App\Models\MultiDayTour;
use Illuminate\Http\Request;


use Illuminate\Support\Str;

class MultiDayTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mtours = MultiDayTour::all();
        //dd($mtours);
        return view('multi_day_tours.index', compact('mtours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('multi_day_tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   dd($request);
        $request->validate([
           'name' => 'required|string|max:255',
            'discount' => 'required|integer',
            'days' => 'required|integer|min:1',
            'nights' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'itinerary' => 'string',
            'includes' => 'string',
            'excludes' => 'string',
            'conditions' => 'string',
            'important' => 'string',
            'tips' => 'string',
            'image' => 'nullable|mimes:jpg,jpeg,png,avif|max:2048',
            'banner' => 'nullable|mimes:jpg,jpeg,png,avif|max:2048',
        ]);

        $data = $request->all();

        $slugreplace = str_replace(' ', '-', $request->name);
        $slug=Str::lower($slugreplace);
        
        $data = $request->all();
        $data['slug'] = $slug;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/multi-tours', 'public');
        }
        if ($request->hasFile('banner')) {
            $data['banner_image'] = $request->file('banner')->store('images/multi-tours/banner', 'public');
        }

        MultiDayTour::create($data);

        return redirect()->route('multi_day_tours.index')->with('success', 'Tour created successfully.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(MultiDayTour $multiDayTour)
    {
        return view('multi_day_tours.show', compact('multiDayTour'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MultiDayTour $multiDayTour)
    {
        return view('multi_day_tours.edit', compact('multiDayTour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       // dd($request->includes);
       
       $request->validate([
        'name' => 'required|string|max:255',
        'discount' => 'required|integer',
        'days' => 'required|integer|min:1',
        'nights' => 'required|integer|min:1',
        'price' => 'required|numeric|min:1',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'itinerary' => 'string',
        'includes' => 'string',
        'excludes' => 'string',
        'conditions' => 'string',
        'important' => 'string',
        'tips' => 'string',
        'image' => 'nullable|mimes:jpg,jpeg,png,avif|max:2048',
        'banner' => 'nullable|mimes:jpg,jpeg,png,avif|max:2048',
    ]);
    
        $data = $request->all();

        // Handle image update


        $tour = MultiDayTour::findOrFail($id);
        $tour->name = $request->name;
        $tour->discount = $request->discount;
        $tour->slogan = $request->slogan;
        $tour->summary = $request->summary;
        $tour->description = $request->description;
        $tour->days = $request->days;
        $tour->nights = $request->nights;
        $tour->price = $request->price;
        $tour->start_date = $request->start_date;
        $tour->end_date = $request->end_date;
        $tour->itinerary = $request->itinerary;
        $tour->includes = $request->includes;
        $tour->excludes = $request->excludes;
        $tour->conditions = $request->conditions;
        $tour->important = $request->important;
        $tour->tips = $request->tips;
     

              
        if ($request->hasFile('image')) {
            $tour->image = $request->file('image')->store('images/multi-tours', 'public');
        }
        if ($request->hasFile('banner')) {
            $tour->banner_image = $request->file('banner')->store('images/multi-tours/banner', 'public');
        }
        
        // Save the updated data
        $tour->update();
        return redirect()->route('multi_day_tours.index')->with('success', 'Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MultiDayTour $multiDayTour)
    {
        //
    }
}
