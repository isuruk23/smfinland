<?php

namespace App\Http\Controllers;

use App\Models\WineDine;
use Illuminate\Http\Request;

class WineDineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wineDine = WineDine::all();
        return response()->json($wineDine);
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
        $wineDine = WineDine::create($request->all());
        return response()->json($wineDine, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(WineDine $wineDine)
    {
        return response()->json($wineDine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WineDine $wineDine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WineDine $wineDine)
    {
        $wineDine->update($request->all());
        return response()->json($wineDine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WineDine $wineDine)
    {
        $wineDine->delete();
        return response()->json(null, 204);
    }
}
