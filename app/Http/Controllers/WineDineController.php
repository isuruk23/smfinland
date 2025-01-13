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
         // Validate the incoming request
         $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255', // assuming you have a resorts table
            'file' => 'nullable|file|mimes:jpg,png,jpeg,gif,avif|max:2048',
        ]);

        

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('public/storage/', 'public');
           
          
        }
        // Store the villa
   
        $WineDine = WineDine::create([
            'title' => $request->title,
            'description' => $request->description,
            'image'=>$imagePath,
            'resort_id' => $request->resortid,
            'status' => 1,
        ]);
        $winedinelists=WineDine::where('resort_id',$request->resortid)->get();
        $resortid=$request->resortid;

        return view('winedine.index', compact('winedinelists', 'resortid'))
        ->with('success', 'Wind Dine Details Insert successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(WineDine $wineDine,$id)
    {
      
       $winedinelists=WineDine::where('resort_id',$id)->get();
       $resortid=$id;
       return view('winedine.index', compact('winedinelists','resortid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WineDine $wineDine,$winedineid,$resortid)
    {
       
        $winedinelists = WineDine::where('resort_id',$resortid)->get();
        
        $winedine = WineDine::where('id',$winedineid)->first();
        
        return view('winedine.index', compact('winedinelists','winedine','resortid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WineDine $wineDine,$id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255', // assuming you have a resorts table
            'file' => 'nullable|file|mimes:jpg,png,jpeg,gif,avif|max:2048',
        ]);

      
        $winedine = WineDine::findOrFail($id);

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('public/storage/', 'public');
           
            $winedine->image = $imagePath;
        }
        // Store the villa
   
        $winedine->title = $request->title;
        $winedine->description = $request->description;
        

        $winedine->update();


        $winedinelists=WineDine::where('resort_id',$request->resortid)->get();
        $resortid=$request->resortid;

        return view('winedine.index', compact('winedinelists', 'resortid'))
        ->with('success', 'Wind Dine Details Updated successfully!');
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
