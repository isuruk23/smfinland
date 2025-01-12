<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quotes = Quote::paginate(10);
        $quoteCount = Quote::count();
        $confirmCount = Quote::where('is_active',1)->count();
        return view('dashboard', compact('quotes','quoteCount','confirmCount'));
    }
}
