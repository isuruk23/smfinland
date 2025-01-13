<?php

namespace App\Http\Controllers;

use App\Models\VillaRoom;
use Illuminate\Http\Request;

class VillaRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villaRooms = VillaRoom::all();
        return response()->json($villaRooms);
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
        $villaRoom = VillaRoom::create($request->all());
        return response()->json($villaRoom, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(VillaRoom $villaRoom)
    {
        return response()->json($villaRoom);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VillaRoom $villaRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VillaRoom $villaRoom)
    {
        $villaRoom->update($request->all());
        return response()->json($villaRoom);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VillaRoom $villaRoom)
    {
        $villaRoom->delete();
        return response()->json(null, 204);
    }
}
