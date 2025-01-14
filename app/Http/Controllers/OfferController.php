<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return response()->json($offers);
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
        $request->validate([
            'title' => 'required|string|max:255',
            'keyword' => 'required|string|max:255',
            'summery' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'type' => 'required',
            'meal' => 'required',
            'description' => 'required|string', // assuming you have a resorts table
            'file' => 'nullable|file|mimes:jpg,png,jpeg,gif,avif|max:2048',
        ]);

        

       

        $offer = new Offer();
        $offer->title = $request->title;
        $offer->keyword = $request->keyword;
        $offer->summery = $request->summery;
        $offer->offer_type = $request->type;
        $offer->meal_type = $request->meal;
        $offer->description = $request->description;
        $offer->resort_id = $request->resortid;
        $offer->status =1;

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $offer->image= $request->file('file')->store('images/resort/offer', 'public');
        }
        $offer->save();
        // Store the villa
   
       
        $offerslist=Offer::where('resort_id',$request->resortid)->get();
        $resortid=$request->resortid;

        return view('offers.index', compact('offerslist', 'resortid'))
        ->with('success', 'Offer Details Insert successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       
        $offerslist=Offer::where('resort_id',$id)->get();
        $resortid=$id;
        return view('offers.index', compact('offerslist','resortid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer,$offerid,$resortid)
    {
       
        $offerslist = Offer::where('resort_id',$resortid)->get();
        
        $offer = Offer::where('id',$offerid)->first();
        
        return view('offers.index', compact('offerslist','offer','resortid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'keyword' => 'required|string|max:255',
            'summery' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'type' => 'required',
            'meal' => 'required',
            'description' => 'required|string', // assuming you have a resorts table
            'file' => 'nullable|file|mimes:jpg,png,jpeg,gif,avif|max:2048',
        ]);
      
      
        $offer = Offer::findOrFail($id);

        // Handle the file upload if exists
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('images/resort/offer', 'public');
           
            $offer->image = $imagePath;
        }
        // Store the villa
   
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->summery = $request->summery;
        $offer->keyword = $request->keyword;
        $offer->meal_type = $request->meal;
        $offer->offer_type = $request->type;
        

        $offer->update();


        $offerslist=Offer::where('resort_id',$request->resortid)->get();
        $resortid=$request->resortid;

        return view('offers.index', compact('offerslist', 'resortid'))
        ->with('success', 'Offer Details Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return response()->json(null, 204);
    }
}
