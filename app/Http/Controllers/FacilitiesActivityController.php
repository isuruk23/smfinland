<?php

namespace App\Http\Controllers;

use App\Models\FacilitiesActivity;
use Illuminate\Http\Request;

class FacilitiesActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilitiesActivities = FacilitiesActivity::all();
        return response()->json($facilitiesActivities);
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
        // Validate the incoming request
        $request->validate([
            'facilities_activities' => 'required|string|max:255',
            'description' => 'required|string|max:255', // assuming you have a resorts table
            'file' => 'required|file|mimes:jpg,png,jpeg,gif,avif|max:2048',
        ]);

        

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('images/resort/facility', 'public');
           
          
        }
        // Store the villa
   
        $facility = FacilitiesActivity::create([
            'facilities_activities' => $request->facilities_activities,
            'description' => $request->description,
            'image'=>$imagePath,
            'resort_id' => $request->resortid,
            'status' => 1,
        ]);
        $facilities=FacilitiesActivity::where('resort_id',$request->resortid)->get();
        $resortid=$request->resortid;

        return view('facilities.index', compact('facilities', 'resortid'))
        ->with('success', 'Facility Details Insert successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FacilitiesActivity $facilitiesActivity,$id)
    {
        $facilities=FacilitiesActivity::where('resort_id',$id)->get();
       $resortid=$id;
       return view('facilities.index', compact('facilities','resortid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacilitiesActivity $facilitiesActivity,$facilityid,$resortid)
    {
        $facilities = FacilitiesActivity::where('resort_id',$resortid)->get();
        
        $facilitiesdetail = FacilitiesActivity::where('id',$facilityid)->first();
        
        return view('facilities.index', compact('facilities','facilitiesdetail','resortid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FacilitiesActivity $facilitiesActivity,$id)
    {
        $request->validate([
            'facilities_activities' => 'required|string|max:255',
            'description' => 'required|string|max:255', // assuming you have a resorts table
            'file' => 'nullable|file|mimes:jpg,png,jpeg,gif,avif|max:2048',
        ]);

      
        $facility = FacilitiesActivity::findOrFail($id);

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('images/resort/facility', 'public');
           
            $facility->image = $imagePath;
        }
        // Store the villa
   
        $facility->facilities_activities = $request->facilities_activities;
        $facility->description = $request->description;
        

        $facility->update();


        $facilities=FacilitiesActivity::where('resort_id',$request->resortid)->get();
        $resortid=$request->resortid;

        return view('facilities.index', compact('facilities', 'resortid'))
        ->with('success', 'Facilities Details Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FacilitiesActivity $facilitiesActivity)
    {
        $facilitiesActivity->delete();
        return response()->json(null, 204);
    }
}
