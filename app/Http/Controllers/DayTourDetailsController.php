<?php

namespace App\Http\Controllers;

use App\Models\DayTourDetails;
use Illuminate\Http\Request;
use App\Models\DayTour;

class DayTourDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function daytourshowdetails($tour)
    {
        
        
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tour)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'highlight' => 'nullable|string',
        'itinerary' => 'nullable|string',
        'includes' => 'nullable|string',
        'excludes' => 'nullable|string',
        'conditions' => 'nullable|string',
        'important' => 'nullable|string',
        'is_active' => 'nullable|boolean',
        'tour_id' => 'required|integer|unique:day_tour_details,tour_id',
    ]);

    // Create the DayTourDetails record
    DayTourDetails::create($validated);

    // Fetch the associated DayTour record (optional)
    $dayTour = DayTour::where('id', $request->tour_id)->first();

    // Redirect with a success message
    return redirect()->route('day_tours_details.show', $dayTour)
        ->with('success', 'Day Tour created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show($tour)
    {
        $DayTour = DayTour::where('id',$tour)->first();
        $DayTourDetails = DayTourDetails::where('tour_id',$tour)->first();
       // dd($DayTourDetails);
        return view('day_tours.createdetails', compact('DayTour','DayTourDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DayTourDetails $DayTourDetails,$tour)
    {
        $DayTourDetails = DayTourDetails::where('tour_id',$tour)->first();
        $DayTour = DayTour::where('id',$tour)->first();
        return view('day_tours.editdetails', compact('DayTour','DayTourDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
        // Find the existing record by ID
        $dayTourDetails = DayTourDetails::where('tour_id',$request->tour_id)->first();

        // Validate the incoming request data
        $validated = $request->validate([
            'highlight' => 'string',
            'itinerary' => 'string',
            'includes' => 'string',
            'excludes' => 'string',
            'conditions' => 'string',
            'important' => 'string',
            'is_active' => 'boolean',
        ]);
        //dd($request->highlight);
         $dayTourDetails->highlight = $request->highlight;
        $dayTourDetails->itinerary = $request->itinerary;
        $dayTourDetails->includes = $request->includes;
        $dayTourDetails->excludes = $request->excludes;
        $dayTourDetails->conditions = $request->conditions;
        $dayTourDetails->important = $request->important;

        // Update the record with validated data
        $dayTourDetails->save();

        // Redirect to the show page with a success message
        return redirect()->route('day_tours_details.show', $dayTourDetails->tour_id)
            ->with('success', 'Day Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DayTourDetails $dayTourDetails)
    {
        //
    }
}
