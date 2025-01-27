<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use App\Models\FacilitiesActivity;
use App\Models\WineDine;
use App\Models\VillaRoom;
use App\Models\Country;
use App\Models\Offer;
use App\Models\ResortCategory;
use App\Models\ResortType;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resorts = Resort::all();
       
        return view('resorts.index', compact('resorts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::all();
        $categories=ResortCategory::all();
        $offers=Offer::all();
        $resortTypes=ResortType::all();
   
        return view('resorts.create', compact('countries','categories','offers','resortTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'country' => 'required',
            'category' => 'required',
            'resort' => 'required|string|max:255',
            'price' => 'required|numeric',
            'offer' => 'nullable',
            'resorttype' => 'required',
            'rates' => 'required|numeric',
            'keyword' => 'required|string|max:255',
            'summery' => 'required|string|max:255',
            'description' => 'required|string',
            'imap' => 'required|string',
            'address' => 'required|string|max:255',
            'file' => 'required|mimes:jpeg,png,jpg,gif,avif,webp|max:2048',
            'file2' => 'required|mimes:jpeg,png,jpg,gif,avif,webp|max:2048',
        ]);

        $resort = new Resort();
        $resort->country = $validated['country'];
        $resort->category = $validated['category'];
        $resort->resort = $validated['resort'];
        $slugreplace = str_replace(' ', '-', $request->resort);
        $slug=Str::lower($slugreplace);
        $resort->resort_alias=$slug;
        $resort->price = $validated['price'];
        $resort->offer = $validated['offer'];
      //  $resort->offertype = $validated['offertype'];
        $resort->resorttype = $validated['resorttype'];
        $resort->rates = $validated['rates'];
        $resort->keyword = $validated['keyword'];
        $resort->summery = $validated['summery'];
        $resort->description = $validated['description'];
        $resort->imap = $validated['imap'];
        $resort->address = $validated['address'];
        $resort->status = 1;
        
        // Handle image uploads
        if ($request->hasFile('file')) {
            $resort->image = $request->file('file')->store('images/resort', 'public');
        }
       
        if ($request->hasFile('file2')) {
            
            $resort->bannerimage = $request->file('file2')->store('images/resort/banner', 'public');
        }

        $resort->save();

        return redirect()->route('resort.index')->with('success', 'Resort created successfully!');
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
        
        $countries=Country::all();
        $categories=ResortCategory::all();
        $offers=Offer::all();
        $resortTypes=ResortType::all();
   
        return view('resorts.edit', compact('countries','categories','offers','resortTypes','resort'));
     
    }

    /**
     * Update the specified resource in storage.
     */
  
    public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'country' => 'required',
                'category' => 'required',
                'resort' => 'required|string|max:255',
                'price' => 'required|numeric',
                'offer' => 'nullable',
                'resorttype' => 'required',
                'rates' => 'required|numeric',
                'keyword' => 'required|string|max:255',
                'summery' => 'required|string|max:255',
                'description' => 'required|string',
                'imap' => 'required|string',
                'address' => 'required|string|max:255',
                'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,avif,webp|max:2048',
                'file2' => 'nullable|file|mimes:jpeg,png,jpg,gif,avif,webp|max:2048',
            ]);
          
            $resort = Resort::findOrFail($id);
            $resort->country = $validated['country'];
            $resort->category = $validated['category'];
            $resort->resort = $validated['resort'];
            $slugreplace = str_replace(' ', '-', $request->resort);
            $slug=Str::lower($slugreplace);
            $resort->resort_alias=$slug;
            $resort->price = $validated['price'];
            $resort->offer = $validated['offer'];
           // $resort->offertype = $validated['offertype'];
            $resort->resorttype = $validated['resorttype'];
            $resort->rates = $validated['rates'];
            $resort->keyword = $validated['keyword'];
            $resort->summery = $validated['summery'];
            $resort->description = $validated['description'];
            $resort->imap = $validated['imap'];
            $resort->address = $validated['address'];
           
            // Handle image uploads
            if ($request->hasFile('file')) {
                // Delete the old image if exists
                if ($resort->image) {
                //    Storage::disk('public/images/resort/banner/')->delete($resort->image);
                }
              
                $resort->image = $request->file('file')->store('images/resort', 'public');
            }

            if ($request->hasFile('file2')) {
                // Delete the old banner image if exists
                if ($resort->bannerimage) {
                   // Storage::disk('public/images/resort/banner/')->delete($resort->banner_image);
                }
                $resort->bannerimage = $request->file('file2')->store('images/resort/banner', 'public');
            }
            
            $resort->save();

            return redirect()->route('resort.index')->with('success', 'Resort updated successfully!');
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $resort = Resort::findOrFail($id);
        if ($resort->image) {
            \Storage::delete($resort->image);
        }   
        if ($resort->bannerimage) {
            \Storage::delete($resort->bannerimage);
        }    
        $resort->delete();  
        
        $villas = VillaRoom::where('resort_id', $id)->get();

        foreach ($villas as $villa) {
            if ($villa->image) {
                \Storage::delete($villa->image);
            }
            $villa->delete();
        }
            // Correct WineDine logic
            $wineDines = WineDine::where('resort_id', $id)->get();
           

            foreach ($wineDines as $wineDine) {
                if ($wineDine->image) {
                    \Storage::delete($wineDine->image);
                }
                $wineDine->delete();
            }

            // Correct FacilitiesActivity logic
            $facilitiesActivities = FacilitiesActivity::where('resort_id', $id)->get();

            foreach ($facilitiesActivities as $facilitiesActivity) {
                if ($facilitiesActivity->image) {
                    \Storage::delete($facilitiesActivity->image);
                }
                $facilitiesActivity->delete();
            }


        return redirect()->route('resort.index')->with('success', 'Resort deleted successfully');
    }
}
