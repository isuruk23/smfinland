<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resorts = Resort::all();
        return response()->json($resorts);
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
        $resort = Resort::create($request->all());
        return response()->json($resort, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resort $resort)
    {
        return response()->json($resort);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resort $resort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        $resort->update($request->all());
        return response()->json($resort);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resort $resort)
    {
        $resort->delete();
        return response()->json(null, 204);
    }
}
