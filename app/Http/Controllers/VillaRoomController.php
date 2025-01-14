<?php

namespace App\Http\Controllers;

use App\Models\VillaRoom;
use App\Models\Resort;
use Illuminate\Http\Request;


class VillaRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
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
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'roomsize' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'view' => 'required|string|max:255',
            'wifi' => 'required|boolean',
            'ac' => 'required|boolean',
            'barthroom' => 'required|boolean',
            'resort' => 'required|exists:resorts,id', // assuming you have a resorts table
            'file' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Store the villa
        $villa = Villa::create([
            'type' => $request->type,
            'name' => $request->name,
            'description' => $request->description,
            'roomsize' => $request->roomsize,
            'bed' => $request->bed,
            'view' => $request->view,
            'wifi' => $request->wifi,
            'ac' => $request->ac,
            'barthroom' => $request->barthroom,
            'resort_id' => $request->resort, // Assuming resort_id is the foreign key
        ]);

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('villa_images', 'public');
            $villa->image_path = $imagePath;
            $villa->save();
        }

        // Redirect back with a success message
        return redirect()->route('villas.index')->with('success', 'Villa added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(VillaRoom $villaRoom,$resortid)
    {
      
        $villaRooms = VillaRoom::where('resort_id',$resortid)->get();
        $resorts = Resort::all();
        
        return view('villas.index', compact('villaRooms','resorts','resortid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VillaRoom $villaRoom,$villaid,$resortid)
    {

        $resorts = Resort::all();
        $villaRooms = VillaRoom::where('resort_id',$resortid)->get();
        $villa = VillaRoom::where('id',$villaid)->first();
      
        return view('villas.index', compact('villaRooms','resorts','villa','resortid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the villa by ID
        $villa = VillaRoom::findOrFail($id);
    
        // Validate the incoming request
        $request->validate([
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'roomsize' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'view' => 'required|string|max:255',
            'wifi' => 'required|boolean',
            'ac' => 'required|boolean',
            'barthroom' => 'required|boolean',
            'resort' => 'required', // Update if this maps to a database column
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,avif|max:2048',
        ]);
    
        // Initialize $imagePath to handle cases where no file is uploaded
        $imagePath = $villa->image; // Keep the existing image if no new file is uploaded
    
        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            // Delete the old file if it exists
            // if ($villa->image && Storage::exists('public/' . $villa->image)) {
            //     Storage::delete('public/' . $villa->image);
            // }
    
            // Store the new file
            $imagePath = $request->file('file')->store('images/resort/villa/', 'public');
        }
    
        // Update the villa details
        $villa->type = $request->type;
        $villa->name = $request->name;
        $villa->description = $request->description;
        $villa->roomsize = $request->roomsize;
        $villa->bed = $request->bed;
        $villa->view = $request->view;
        $villa->wifi = $request->wifi;
        $villa->ac = $request->ac;
        $villa->barthroom = $request->barthroom;
        $villa->image = $imagePath;
 
        // Save the updated villa
        $villa->save();
    
        // Redirect back with a success message
       // return redirect()->route('villas.index')->with('success', 'Villa updated successfully!');
       $resorts = Resort::all();
       $villaRooms = VillaRoom::where('resort_id',$request->resort)->get();
       $villa = VillaRoom::where('id',$request->id)->first();
       $resortid=$request->resort;
       return view('villas.index', compact('villaRooms', 'resorts', 'villa', 'resortid'))
    ->with('success', 'Villa updated successfully!');

    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
        $villaRoom = VillaRoom::findOrFail($id);

        if ($villaRoom->image) {
            \Storage::delete($villaRoom->image);
        }
        
        $villaRoom->delete();

        return redirect()->back()->with('success', 'Villa Room deleted successfully.');
    
    }
}
