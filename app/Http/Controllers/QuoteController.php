<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Rinvex\Country\CountryLoader;

use Carbon\Carbon;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::paginate(10);
        return view('quote.index', compact('quotes'));
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
        // Validate incoming request

        
        $request->validate([
            'name' => 'required|string|max:255',
            'arrival' => 'required|date',
            'nights' => 'required',
            'country' => 'required|string',
            'contactno' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        // Create new quote record
        //dd($request);
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->arrival = $request->arrival;
        $quote->departure = $request->departure;
        
        // Parse dates and calculate the difference in nights
        $arrivalDate = Carbon::parse($request->arrival);


       // $departureDate = Carbon::parse($request->departure);
        $departureDate = $arrivalDate->copy()->addDays($request->nights);
        
      //dd($request);
        $quote->night = $request->nights;
        $quote->departure = $departureDate;
        $quote->country = $request->country;
        $quote->adult = $request->adult;
        $quote->child = $request->child;
        $quote->infant = $request->infant;
        $quote->contactno = $request->contactno;
        $quote->email = $request->email;
        $quote->tourtype = $request->tourtype;
        $quote->tourid = $request->tourid;

        $quote->save(); // Save data to the database

        // Redirect or return a response
       // return redirect()->route('quote.success'); // Assuming you have a route for success
       return back()->with('success', 'Quotaion Send Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the quote record by id
        $quote = Quote::findOrFail($id);

        // Return the view with the quote data
        return view('quote.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the quote record by id
        $quote = Quote::findOrFail($id);

        // Return the view with the quote data
        $countries = collect(CountryLoader::countries())->map(function ($country) {
            return [
                'country-code' => $country['iso_3166_1_alpha2'],
                'name' => $country['name'],
                'code' => $country['calling_code'] ?? '',
            ];
        })->sortBy('name')->values();

        return view('quote.edit', compact('quote','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the updated data
        $request->validate([
            'name' => 'required|string|max:255',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
            'country' => 'required|string',
            'night' => 'required|integer',
            'adult' => 'required|integer',
            'child' => 'required|integer',
            'infant' => 'required|integer',
            'contactno' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        // Find the quote record
        $quote = Quote::findOrFail($id);
        $quote->name = $request->name;
        $quote->arrival = $request->arrival;
        $quote->departure = $request->departure;
        $quote->country = $request->country;
        $quote->night = $request->night;
        $quote->adult = $request->adult;
        $quote->child = $request->child;
        $quote->infant = $request->infant;
        $quote->contactno = $request->contactno;
        $quote->email = $request->email;
        $quote->tour = $request->tour;
        $quote->tourtype = $request->tourtype;

        // Save the updated data
        $quote->save();

        // Redirect or return a response
       
        return redirect()->route('quotes.index')->with('success', 'Quote updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $quote = Quote::findOrFail($id);

          

        $quote->delete();   

        return redirect()->route('quotes.index')->with('success', 'Quote deleted successfully');
    }
}
