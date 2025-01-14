<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\MultiDayTourDetails;
use App\Models\MultiDayTour;
use App\Models\DayTour;
use App\Models\DayTourDetails;
use App\Models\Experience;
use App\Models\City;
use App\Models\Destinations;
use App\Models\Resort;
use App\Models\Offer;
use App\Models\VillaRoom;
use App\Models\FacilitiesActivity;
use App\Models\Document;
use App\Models\WineDine;
use Rinvex\Country\CountryLoader;
use App\Models\Blog;
use App\Models\Review;


use App\Models\Thingstodo;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Home',
            'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters.',
            'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
        ];
       // $resorts = Resort::where('status',1)->get();
        $resorts =DB::table('resorts')
        ->join('resort_categories', 'resorts.category', '=', 'resort_categories.id')
        ->join('resort_types', 'resorts.resorttype', '=', 'resort_types.id')
        ->select('resorts.*', 'resort_types.type AS category', 'resort_types.type')
        ->get();
        $blogs = Blog::where('is_active',1)->limit(3)->get();
        $multitours = MultiDayTour::all();
        $tours = DayTour::all();
        $cities = City::all();
        $reviews=Review::all();
        return view('welcome', compact('multitours','tours','cities','reviews','meta','blogs','resorts'));
    }
    public function daytour()
    {
        $meta = [
            'title' => 'Day Tours',
            'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. ',
            'meta_keywords' => 'day tour, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning',
        ];
        $tours = DayTour::where('is_active',1)->paginate(15);
        return view('daytours', compact('tours','meta'));
    }
    public function multidaytour()
    {
        $meta = [
            'title' => ' Multiday Tours at Simplifly Sri Lanka',
            'meta_description' => 'Enjoy Multiday Tours at Simplifly Sri Lanka. We offer high-quality, reliable travel service for travel lovers. Connect with the best travel agency in Sri Lanka.',
            'meta_keywords' => ' sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka multyday tours',
        ];
        $multitourspage = MultiDayTour::where('is_active',1)->paginate(15);
;

        return view('multidaytours', compact('multitourspage','meta'));
    }
    public function experiences()
    {
        $meta = [
            'title' => 'Unforgettable Travel Experiences in Sri Lanka',
            'meta_description' => 'Explore the best of Sri Lanka with unique travel experiences! From breathtaking beaches to cultural wonders, thrilling adventures, and serene wildlife encounters, discover why Sri Lanka is the ultimate destination for travelers.',
            'meta_keywords' => 'Sri Lanka travel experiences, adventure in Sri Lanka, cultural tours Sri Lanka, nature trips Sri Lanka, best things to do in Sri Lanka, Sri Lanka tourism, wildlife Sri Lanka, beaches and mountains Sri Lanka, Sri Lanka activities',
        ];
        $experiences = Experience::where('is_active',1)->paginate(15);
        return view('experiences', compact('experiences','meta'));
    }
    public function about()
    {
        $meta = [
            'title' => 'About Simplifly Sri Lanka Agents',
            'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
            'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
        ];
        $reviews=Review::all();
        return view('about', compact('reviews','meta'));
    }
    public function contact()
    {
        $meta = [
            'title' => 'About Simplifly Sri Lanka Agents',
            'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
            'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
        ];
        $countries = collect(CountryLoader::countries())->map(function ($country) {
            return [
                'country-code' => $country['iso_3166_1_alpha2'],
                'name' => $country['name'],
                'code' => $country['calling_code'] ?? '',
            ];
        })->sortBy('name')->values();
        $ip = request()->ip();
        // Make a request to ipinfo.io API
     $response = Http::get("https://ipinfo.io/{8.8.8.8}/json");
    // dd($response->json()['country']);
     // Debug: dump the response structure 
 
     // Extract the country code from the response
     $visitorCountryCode = substr($response->json()['country'], 0, 2); // Get the country code (e.g., "US")
   //country-code  dd(CountryLoader::countries());
        return view('contact', compact('meta','countries','visitorCountryCode'));
    }

    public function multidaytourdetails($slug,$id)
    {
        
       
        $tour = MultiDayTour::where('id',$id)->first();
    
        $ip = request()->ip();

        // Make a request to ipinfo.io API
     $response = Http::get("https://ipinfo.io/{8.8.8.8}/json");
     // Debug: dump the response structure 
 
     // Extract the country code from the response
     $visitorCountryCode = substr($response->json()['country'], 0, 2); // Get the country code (e.g., "US")
   //country-code  dd(CountryLoader::countries());
     $countries = collect(CountryLoader::countries())->map(function ($country) {
         return [
             'country-code' => $country['iso_3166_1_alpha2'],
             'name' => $country['name'],
             'code' => $country['calling_code'] ?? '',
         ];
     })->sortBy('name')->values();

      
        $meta = [
            'title' => $tour->name,
            'meta_description' => $tour->summary,
            'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
        ];

        $tourdetails = MultiDayTourDetails::where('tour_id', $id)->orderBy('day', 'asc')->get();
        $date= now()->toDateString();
        return view('multidaytourdetails', compact('tourdetails','tour','slug','id','meta','countries','visitorCountryCode','date'));
    }

    public function daytourdetails($slug,$id)
    {
        $ip = request()->ip();
        // Make a request to ipinfo.io API
     $response = Http::get("https://ipinfo.io/{8.8.8.8}/json");
     // Debug: dump the response structure 
 
     // Extract the country code from the response
     $visitorCountryCode = substr($response->json()['country'], 0, 2); // Get the country code (e.g., "US")
   //country-code  dd(CountryLoader::countries());
     $countries = collect(CountryLoader::countries())->map(function ($country) {
         return [
             'country-code' => $country['iso_3166_1_alpha2'],
             'name' => $country['name'],
             'code' => $country['calling_code'] ?? '',
         ];
     })->sortBy('name')->values();
     
        $tour = DayTour::where('id',$id)->first();
        $meta = [
            'title' => $tour->name,
            'meta_description' => $tour->summary,
            'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
        ];
        $tourdetails = DayTourDetails::where('tour_id',$id)->first();
        $date= now()->toDateString();
        return view('daytourdetails', compact('tourdetails','tour','slug','id','meta','countries','visitorCountryCode','date'));
    }
    public function multidayquote($slug,$id){
        $tour = MultiDayTour::where('id',$id)->first();
        $tourid=$tour->id;
        $tourtype='day';
       
        $ip = request()->ip();
 
       // Make a request to ipinfo.io API
    $response = Http::get("https://ipinfo.io/{8.8.8.8}/json");
    // Debug: dump the response structure 

    // Extract the country code from the response
    $visitorCountryCode = substr($response->json()['country'], 0, 2); // Get the country code (e.g., "US")
   //dd(CountryLoader::countries());
    $countries = collect(CountryLoader::countries())->map(function ($country) {
        return [
            'country-code' => $country['iso_3166_1_alpha2'],
            'name' => $country['name'],
            'code' => $country['calling_code'] ?? '',
        ];
    })->sortBy('name')->values();
    $meta = [
        'title' => 'Get a Quote',
        'meta_description' => 'Find out exciting travel offers Sri Lanka online to book your guided tour with us. Get a special quote from the leading tour agents, Simplify Sri Lanka!',
        'meta_keywords' => 'Travel Offers Sri Lanka, Get a Quote',
    ];
    $date= now()->toDateString();
        return view('quote', compact('countries','tourid','tourtype', 'visitorCountryCode','meta','date'));
    }
    public function daytourquote($slug,$id){
        $tour = DayTour::where('id',$id)->first();
        $tourid=$tour->id;
        $tourtype='day';

        $ip = request()->ip();
       // Make a request to ipinfo.io API
    $response = Http::get("https://ipinfo.io/{8.8.8.8}/json");
    // Debug: dump the response structure 

    // Extract the country code from the response
    $visitorCountryCode = substr($response->json()['country'], 0, 2); // Get the country code (e.g., "US")
  //country-code  dd(CountryLoader::countries());
    $countries = collect(CountryLoader::countries())->map(function ($country) {
        return [
            'country-code' => $country['iso_3166_1_alpha2'],
            'name' => $country['name'],
            'code' => $country['calling_code'] ?? '',
        ];
    })->sortBy('name')->values();
$meta = [
        'title' => 'Get a Quote',
        'meta_description' => 'Find out exciting travel offers Sri Lanka online to book your guided tour with us. Get a special quote from the leading tour agents, Simplify Sri Lanka!',
        'meta_keywords' => 'Travel Offers Sri Lanka, Get a Quote',
    ];
    $date= now()->toDateString();

        return view('quote', compact('countries','tourid','tourtype', 'visitorCountryCode','meta','date'));
    }
    public function quote(){
        $ip = request()->ip();
        // Make a request to ipinfo.io API
     $response = Http::get("https://ipinfo.io/{8.8.8.8}/json");
     // Debug: dump the response structure 
 
     // Extract the country code from the response
     $visitorCountryCode = substr($response->json()['country'], 0, 2); // Get the country code (e.g., "US")
   //country-code  dd(CountryLoader::countries());
     $countries = collect(CountryLoader::countries())->map(function ($country) {
         return [
             'country-code' => $country['iso_3166_1_alpha2'],
             'name' => $country['name'],
             'code' => $country['calling_code'] ?? '',
         ];
     })->sortBy('name')->values();
 $tourid=0;
 $tourtype="quote";
 
 $meta = [
        'title' => 'Get a Quote',
        'meta_description' => 'Find out exciting travel offers Sri Lanka online to book your guided tour with us. Get a special quote from the leading tour agents, Simplify Sri Lanka!',
        'meta_keywords' => 'Travel Offers Sri Lanka, Get a Quote',
    ];
    $date= now()->toDateString();
         return view('quote', compact('countries','tourid','tourtype', 'visitorCountryCode','meta','date'));
    }
    public function citydestination(){
        //$cities = City::where('title',$title)->first();
        $destinations = Destinations::get();
        $meta = [
            'title' =>'Top Places to Visit in Sri Lanka | Explore Iconic Destinations & Hidden Gems',
            'meta_description' =>'Plan your Sri Lanka trip with our guide to the top places to visit! From ancient cities and stunning beaches to lush tea plantations and wildlife-filled national parks, discover the beauty and diversity of Sri Lanka.',
            'meta_keywords' => 'Places to visit in Sri Lanka, Sri Lanka destinations, best tourist spots in Sri Lanka, must-see places in Sri Lanka, cultural sites Sri Lanka, beaches Sri Lanka, hill country Sri Lanka, wildlife parks Sri Lanka, scenic places Sri Lanka, travel guide Sri Lanka',
        ];
         return view('destinations', compact('destinations','meta'));
    }

    public function destinationdetails($slug,$id){
        $destinations = Destinations::where('id',$id)->first();
        $meta = [
            'title' =>$destinations->title,
            'meta_description' =>'Plan your Sri Lanka trip with our guide to the top places to visit! From ancient cities and stunning beaches to lush tea plantations and wildlife-filled national parks, discover the beauty and diversity of Sri Lanka.',
            'meta_keywords' => 'Places to visit in Sri Lanka, Sri Lanka destinations, best tourist spots in Sri Lanka, must-see places in Sri Lanka, cultural sites Sri Lanka, beaches Sri Lanka, hill country Sri Lanka, wildlife parks Sri Lanka, scenic places Sri Lanka, travel guide Sri Lanka',
        ];
        return view('destinationdetails', compact('destinations','meta'));
    }

    public function thingstodo(){
        $meta = [
            'title' =>'Top Things to Do in Sri Lanka | Adventures, Attractions & Must-See Destinations',
            'meta_description' =>'Discover the best things to do in Sri Lanka, from exploring ancient ruins and trekking lush mountains to relaxing on golden beaches and immersing in vibrant culture. Plan your ultimate Sri Lankan adventure today!' ,
            'meta_keywords' => 'Things to do in Sri Lanka, Sri Lanka attractions, must-visit places in Sri Lanka, adventure activities Sri Lanka, cultural experiences Sri Lanka, Sri Lanka sightseeing, Sri Lanka travel guide, beaches Sri Lanka, hiking Sri Lanka, wildlife Sri Lanka',
        ];
        $thingstodos = Thingstodo::get();
         return view('thingstodo', compact('thingstodos','meta'));
    }

    public function thingstododetails($slug,$id){
        $thingstodo = Thingstodo::where('id',$id)->first();
        $meta = [
            'title' =>$thingstodo->title,
            'meta_description' =>$thingstodo->thingstodo ,
            'meta_keywords' => 'Things to do in Sri Lanka, Sri Lanka attractions, must-visit places in Sri Lanka, adventure activities Sri Lanka, cultural experiences Sri Lanka, Sri Lanka sightseeing, Sri Lanka travel guide, beaches Sri Lanka, hiking Sri Lanka, wildlife Sri Lanka',
        ];
        return view('thingstododetails', compact('thingstodo','meta'));
    }
    
public function blogs(){
    $blogs = Blog::where('is_active',1)->paginate(9);
    $meta = [
        'title' => 'Simplifly Sri Lanka Blog',
        'meta_description' => 'Read Simplifly Sri Lanka Stories Online in our Official blog. Add spice to your vacation with this very special tour packages offered in Sri Lanka',
        'meta_keywords' => 'travel blogs, blogs, simplifly blogs, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning',
    ];
    
         return view('blogs', compact('blogs','meta'));
}
public function blogpage($id, $slug){
    $blog = Blog::where('id',$id)->first();
    //dd($blog);
    $meta = [
        'title' =>$blog->title,
        'meta_description' =>$blog->summary ,
        'meta_keywords' => 'travel blogs, blogs, simplifly blogs, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning',
    ];
         return view('blogpage', compact('blog','meta'));
}

public function placetovisit(){
    $cities = City::all();
    return view('placetovisit', compact('cities'));
}

public function bookingcancellationpolicy(){
    $meta = [
        'title' => 'About Simplifly Sri Lanka Agents',
        'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
        'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
    ];
    return view('booking_and_cancellation', compact('meta'));

}

public function privacypolicy(){
    $meta = [
        'title' => 'About Simplifly Sri Lanka Agents',
        'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
        'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
    ];
    return view('privacy_policy', compact('meta'));

}

public function termscondition(){
    $meta = [
        'title' => 'About Simplifly Sri Lanka Agents',
        'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
        'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
    ];
    return view('terms', compact('meta'));

}

public function ourteam(){
    $meta = [
        'title' => 'About Simplifly Sri Lanka Agents',
        'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
        'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
    ];
    return view('our_team', compact('meta'));
}

public function chevalblanc(){
    return view('cheval_blanc');
}

public function fourseason(){
    return view('four_season');
}

public function faq(){
    $meta = [
        'title' => 'About Simplifly Sri Lanka Agents',
        'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
        'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
    ];
    return view('faq', compact('meta'));
}

public function booking(){
    $meta = [
        'title' => 'About Simplifly Sri Lanka Agents',
        'meta_description' => 'Sri Lanka is a country with a diverse population of people of many nationalities. Be mesmerized by the infinite miles of beautiful white sandy beaches and gorgeous blue waters. Sip a nice cup of Ceylon Tea while enjoying the varied spices and rice and curries. Simplifly Sri Lanka (Pvt) Ltd believes in an exceptional quality of living, where every journey should be a memorable experience.',
        'meta_keywords' => 'simplifly, simpliflysrilanka, sri lanka tours, family vacations, solo travellers, tropical getaway, island holidays, holiday planning, srilanka',
    ];
    return view('bookingcancellationpolicy', compact('meta'));
}


public function honeymoonresorts(){
    $meta = [
        'title' => 'Simplifly Finland - Honeymoon Resort',
        'meta_description' => 'Discover the top-rated All-inclusive holiday packages, luxury honeymoon packages, birthday celebration, family holiday and early bird offers. Maldives is waiting for you! Seize the best deals & offers and get ready to create a bunch of unforgettable experiences.',
        'meta_keywords' => 'simplifly Offers,simpliflymaldives Offers,Maldives resorts Offers, Maldives hotels Offers, resorts Offers in Maldives , hotels Offers in Maldives, holidays Offers in Maldives, honeymoon Offers in Maldives, travel Offers to Maldives, Maldives atolls Offers, vacation Offers in Maldives,top resorts Offers in Maldives, family resorts Offers, family resorts Offers in Maldives, budget resorts Offers, budget resorts Offers in Maldives, top luxurious resorts Offers, top luxurious resorts Offers in Maldives, vacation, vacations, vacation packages, vacation package, travel package, travel packages,Holiday in Maldives,Honeymoon in Maldives, 	Hotels in Maldives, Visit Maldives, Book Maldives, Maldives Holiday offers, Maldives Holiday deals, Maldives all inclusive, 	Cheap deals for Maldives, Diving resort in Maldives, Surfing resorts in Maldives, Couple resorts in Maldives, Honeymoon resorts in Maldives, Family resorts in Maldives, Budget resorts in Maldives, Weddings in Maldives, Top luxury resorts in Maldives, Vacation packages in Maldives,Travel packages in Maldives, Best Maldives resorts, Top 10 Maldives resorts, Hotels and resorts in Maldives, 	Travel agents in Maldives, Resorts in Maldives, Maldives holiday packages, Tours and travels in Maldives',
    ];
   
    $resorts =DB::table('resorts')
    ->join('resort_categories', 'resorts.category', '=', 'resort_categories.id')
    ->join('resort_types', 'resorts.resorttype', '=', 'resort_types.id')
    ->select('resorts.*', 'resort_types.type AS category', 'resort_types.type')
    ->where('resorts.category',2)
    ->get();

    return view('honeymoonresorts', compact('resorts','meta'));
}

public function familyresorts(){
    $meta = [
        'title' => 'Simplifly Finland - Honeymoon Resort',
        'meta_description' => 'Discover the top-rated All-inclusive holiday packages, luxury honeymoon packages, birthday celebration, family holiday and early bird offers. Maldives is waiting for you! Seize the best deals & offers and get ready to create a bunch of unforgettable experiences.',
        'meta_keywords' => 'simplifly Offers,simpliflymaldives Offers,Maldives resorts Offers, Maldives hotels Offers, resorts Offers in Maldives , hotels Offers in Maldives, holidays Offers in Maldives, honeymoon Offers in Maldives, travel Offers to Maldives, Maldives atolls Offers, vacation Offers in Maldives,top resorts Offers in Maldives, family resorts Offers, family resorts Offers in Maldives, budget resorts Offers, budget resorts Offers in Maldives, top luxurious resorts Offers, top luxurious resorts Offers in Maldives, vacation, vacations, vacation packages, vacation package, travel package, travel packages,Holiday in Maldives,Honeymoon in Maldives, 	Hotels in Maldives, Visit Maldives, Book Maldives, Maldives Holiday offers, Maldives Holiday deals, Maldives all inclusive, 	Cheap deals for Maldives, Diving resort in Maldives, Surfing resorts in Maldives, Couple resorts in Maldives, Honeymoon resorts in Maldives, Family resorts in Maldives, Budget resorts in Maldives, Weddings in Maldives, Top luxury resorts in Maldives, Vacation packages in Maldives,Travel packages in Maldives, Best Maldives resorts, Top 10 Maldives resorts, Hotels and resorts in Maldives, 	Travel agents in Maldives, Resorts in Maldives, Maldives holiday packages, Tours and travels in Maldives',
    ];
   
    $resorts =DB::table('resorts')
    ->join('resort_categories', 'resorts.category', '=', 'resort_categories.id')
    ->join('resort_types', 'resorts.resorttype', '=', 'resort_types.id')
    ->select('resorts.*', 'resort_types.type AS category', 'resort_types.type')
    ->where('resorts.category',3)
    ->get();



    return view('familyresorts', compact('resorts','meta'));
}

public function coupleresorts(){
    $meta = [
        'title' => 'Simplifly Finland - Honeymoon Resort',
        'meta_description' => 'Discover the top-rated All-inclusive holiday packages, luxury honeymoon packages, birthday celebration, family holiday and early bird offers. Maldives is waiting for you! Seize the best deals & offers and get ready to create a bunch of unforgettable experiences.',
        'meta_keywords' => 'simplifly Offers,simpliflymaldives Offers,Maldives resorts Offers, Maldives hotels Offers, resorts Offers in Maldives , hotels Offers in Maldives, holidays Offers in Maldives, honeymoon Offers in Maldives, travel Offers to Maldives, Maldives atolls Offers, vacation Offers in Maldives,top resorts Offers in Maldives, family resorts Offers, family resorts Offers in Maldives, budget resorts Offers, budget resorts Offers in Maldives, top luxurious resorts Offers, top luxurious resorts Offers in Maldives, vacation, vacations, vacation packages, vacation package, travel package, travel packages,Holiday in Maldives,Honeymoon in Maldives, 	Hotels in Maldives, Visit Maldives, Book Maldives, Maldives Holiday offers, Maldives Holiday deals, Maldives all inclusive, 	Cheap deals for Maldives, Diving resort in Maldives, Surfing resorts in Maldives, Couple resorts in Maldives, Honeymoon resorts in Maldives, Family resorts in Maldives, Budget resorts in Maldives, Weddings in Maldives, Top luxury resorts in Maldives, Vacation packages in Maldives,Travel packages in Maldives, Best Maldives resorts, Top 10 Maldives resorts, Hotels and resorts in Maldives, 	Travel agents in Maldives, Resorts in Maldives, Maldives holiday packages, Tours and travels in Maldives',
    ];
   
    $resorts =DB::table('resorts')
    ->join('resort_categories', 'resorts.category', '=', 'resort_categories.id')
    ->join('resort_types', 'resorts.resorttype', '=', 'resort_types.id')
    ->select('resorts.*', 'resort_types.type AS category', 'resort_types.type')
    ->where('resorts.category',4)
    ->get();



    return view('coupleresorts', compact('resorts','meta'));
}
public function allinclusiveresort(){
    $meta = [
        'title' => 'Simplifly Finland - Honeymoon Resort',
        'meta_description' => 'Discover the top-rated All-inclusive holiday packages, luxury honeymoon packages, birthday celebration, family holiday and early bird offers. Maldives is waiting for you! Seize the best deals & offers and get ready to create a bunch of unforgettable experiences.',
        'meta_keywords' => 'simplifly Offers,simpliflymaldives Offers,Maldives resorts Offers, Maldives hotels Offers, resorts Offers in Maldives , hotels Offers in Maldives, holidays Offers in Maldives, honeymoon Offers in Maldives, travel Offers to Maldives, Maldives atolls Offers, vacation Offers in Maldives,top resorts Offers in Maldives, family resorts Offers, family resorts Offers in Maldives, budget resorts Offers, budget resorts Offers in Maldives, top luxurious resorts Offers, top luxurious resorts Offers in Maldives, vacation, vacations, vacation packages, vacation package, travel package, travel packages,Holiday in Maldives,Honeymoon in Maldives, 	Hotels in Maldives, Visit Maldives, Book Maldives, Maldives Holiday offers, Maldives Holiday deals, Maldives all inclusive, 	Cheap deals for Maldives, Diving resort in Maldives, Surfing resorts in Maldives, Couple resorts in Maldives, Honeymoon resorts in Maldives, Family resorts in Maldives, Budget resorts in Maldives, Weddings in Maldives, Top luxury resorts in Maldives, Vacation packages in Maldives,Travel packages in Maldives, Best Maldives resorts, Top 10 Maldives resorts, Hotels and resorts in Maldives, 	Travel agents in Maldives, Resorts in Maldives, Maldives holiday packages, Tours and travels in Maldives',
    ];
   
    $resorts =DB::table('resorts')
    ->join('resort_categories', 'resorts.category', '=', 'resort_categories.id')
    ->join('resort_types', 'resorts.resorttype', '=', 'resort_types.id')
    ->select('resorts.*', 'resort_types.type AS category', 'resort_types.type')
    ->where('resorts.category',1)
    ->get();



    return view('allinclusiveresorts', compact('resorts','meta'));
}


public function resortdetails($slug,$id){

    $resort=Resort::where('id',$id)->first();

    $meta = [
        'title' => 'Simplifly Finland - '. $resort->resort,
        'meta_description' => $resort->description,
        'meta_keywords' => $resort->keywords,
    ];
   
    
    $offers = Offer::where('resort_id',$id)->get();
    $villas = VillaRoom::where('resort_id',$id)->get();
    $documents = Document::where('resort_id',$id)->get();
    $restaurants = WineDine::where('resort_id',$id)->get();
    $experiences = FacilitiesActivity::where('resort_id',$id)->get();


    return view('resortdetails', compact('meta','resort','offers','villas','documents','restaurants','experiences'));
}
}


