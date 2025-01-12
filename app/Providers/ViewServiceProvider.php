<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\DayTour;
use App\Models\MultiDayTour;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $tours = DayTour::where('is_active',1)->get();// Fetch all tours from the database
            $multitours = MultiDayTour::where('is_active',1)->get();
            //dd($multitours);
            $view->with([
                'tours' => $tours,
                'multitours' => $multitours,
            ]);
        });
    }
}
