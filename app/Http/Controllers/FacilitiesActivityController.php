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
        $facilityActivity = FacilitiesActivity::create($request->all());
        return response()->json($facilityActivity, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(FacilitiesActivity $facilitiesActivity)
    {
        return response()->json($facilitiesActivity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacilitiesActivity $facilitiesActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FacilitiesActivity $facilitiesActivity)
    {
        $facilitiesActivity->update($request->all());
        return response()->json($facilitiesActivity);
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
