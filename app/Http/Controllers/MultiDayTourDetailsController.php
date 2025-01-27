<?php

namespace App\Http\Controllers;

use App\Models\MultiDayTourDetails;
use App\Models\MultiDayTour;
use Illuminate\Http\Request;

class MultiDayTourDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'day' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string',
            'image1' => 'required|mimes:jpg,jpeg,png,webp,avif,webp',
            'image2' => 'required|mimes:jpg,jpeg,png,webp,avif,webp',
            'tour_id' => 'required|integer',
            'is_active' => 'boolean',
        ]);
        
        $data = $request->all();
        $tour_id = $request->tour_id;
        // Handle file uploads
        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('images/multi-tours', 'public');
            
        }
        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('images/multi-tours', 'public');
        }

        MultiDayTourDetails::create($data);

        return redirect()->route('multiday_tours_details.show', $tour_id)
    ->with('success', 'MultiDay Tour created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($tour)
    {
        $multiDayTour = MultiDayTour::where('id',$tour)->first();
        $MultiDayTourDetails = MultiDayTourDetails::where('tour_id',$tour)->orderBy('day', 'asc')->get();
//dd($MultiDayTourDetails);
        return view('multi_day_tours.createdetails', compact('multiDayTour','MultiDayTourDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
        $MultiDayTourDetails = MultiDayTourDetails::findOrFail($id);
       
        return view('multi_day_tours.editdetails', compact('MultiDayTourDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    
       

        $validated = $request->validate([
            'day' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string',
            'image1' => 'nullable|mimes:jpg,jpeg,png,webp,avif,webp|max:2048',
            'image2' => 'nullable|mimes:jpg,jpeg,png,webp,avif,webp|max:2048', // Added validation for image2
            'tour_id' => 'required|integer',
            'is_active' => 'boolean',
        ]);
        
        $tour = MultiDayTourDetails::findOrFail($id);
                $tour->day = $request->day;
                $tour->title = $request->title;
                $tour->description = $request->description;
                // Handle file uploads
                if ($request->hasFile('image1')) {
                    
                    $tour->image1 = $request->file('image1')->store('images/multi-tours', 'public');
                    
                }
                if ($request->hasFile('image2')) {
                    $tour->image2 = $request->file('image2')->store('images/multi-tours', 'public');
                }
        
                $tour->update();
        
        return redirect()->back()->with('success', 'Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dayTourDetails = MultiDayTourDetails::findOrFail($id);
        $tour_id=$dayTourDetails->tour_id;
        // Optionally delete image files
        if ($dayTourDetails->image1) {
            \Storage::delete($dayTourDetails->image1);
        }
        if ($dayTourDetails->image2) {
            \Storage::delete($dayTourDetails->image2);
        }

        $dayTourDetails->delete();

        return redirect()->route('multiday_tours_details.show', $tour_id)
    ->with('success', 'MultiDay Tour created successfully.');
    }
}
