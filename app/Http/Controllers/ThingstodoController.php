<?php

namespace App\Http\Controllers;

use App\Models\Thingstodo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThingstodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thingstodos = Thingstodo::all();
        return view('thingstodos.index', compact('thingstodos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('thingstodos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,avif',
            'city' => 'required|integer',
        ]);
        $data = $request->all();

        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $data['slug'] = $slug;


        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/thingstodo', 'public');
        }
    

        Thingstodo::create($data);

        return redirect()->route('thingstodo.index')->with('success', 'thingstodo created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $thingstodo = Thingstodo::findOrFail($id);
        return view('thingstodos.show', compact('thingstodo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $thingstodo = Thingstodo::findOrFail($id);
        return view('thingstodos.edit', compact('thingstodo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $thingstodo = Thingstodo::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,avif',
            'city' => 'required|integer',
        ]);

        

        $data = $request->all();
        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $data['slug'] = $slug;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/thingstodo', 'public');
        }
     

        $thingstodo->update($data);

        return redirect()->route('thingstodo.index')->with('success', 'thingstodo updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $thingstodo = Thingstodo::findOrFail($id);

        if ($thingstodo->image1) {
            \Storage::delete($thingstodo->image);
        }
        
        $thingstodo->delete();

        return redirect()->route('thingstodo.index')->with('success', 'thingstodo deleted successfully.');
    
    }
}
