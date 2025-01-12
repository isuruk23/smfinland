<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;


use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slugreplace = str_replace(' ', '-', $request->name);
        $slug=Str::lower($slugreplace);
        
        $data = $request->all();
        $data['slug'] = $slug;
       
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/experiences', 'public');
        }

        Experience::create($data);

        return redirect()->route('experience.index')->with('success', 'Experience created successfully.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('experience.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // Handle image update
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/tours', 'public');
        }

        $experience->update($data);

        return redirect()->route('experience.index')->with('success', 'Tour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
