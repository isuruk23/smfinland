<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiDayTourController;
use App\Http\Controllers\DayTourController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DayTourDetailsController;
use App\Http\Controllers\MultiDayTourDetailsController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ThingstodoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\VillaRoomController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\WineDineController;
use App\Http\Controllers\FacilitiesActivityController;


Route::middleware(['auth'])->group(function () {

Route::resource('multi_day_tours', MultiDayTourController::class);
Route::resource('day_tours', DayTourController::class);
Route::resource('day_tours_details', DayTourDetailsController::class);
Route::resource('multiday_tours_details', MultiDayTourDetailsController::class);
Route::resource('destinations', DestinationsController::class);
Route::resource('cities', CityController::class);
Route::resource('quotes', QuoteController::class);
Route::resource('blogs', BlogController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('thingstodo', ThingstodoController::class);
Route::resource('offers', OfferController::class);
Route::resource('villas', VillaRoomController::class);
Route::resource('documents', DocumentController::class);
Route::resource('resort', ResortController::class);
Route::resource('winedine', WineDineController::class);
Route::resource('facility', FacilitiesActivityController::class);

});
Route::get('/offeredit/{id}/{resortid}', [OfferController::class, 'edit'])->name('offeredit');
Route::get('/villaedit/{id}/{resortid}', [VillaRoomController::class, 'edit'])->name('villaedit');
Route::get('/winedineedit/{id}/{resortid}', [WineDineController::class, 'edit'])->name('winedineedit');
Route::get('/facilityedit/{id}/{resortid}', [FacilitiesActivityController::class, 'edit'])->name('facilityedit');
Route::delete('/multiday-tours-details/{id}', [MultiDayTourDetailsController::class, 'destroy'])->name('multiday_tours_details.delete');

Route::resource('experience', ExperienceController::class);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/multiday-tour/{slug}/{id}', [App\Http\Controllers\PageController::class, 'multidaytourdetails']);
Route::get('/multiday-tour/{slug}/{id}/quote', [App\Http\Controllers\PageController::class, 'multidayquote']);
Route::get('/day-tour/{slug}/{id}', [App\Http\Controllers\PageController::class, 'daytourdetails']);
Route::get('/day-tour/{slug}/{id}/quote', [App\Http\Controllers\PageController::class, 'daytourquote']);
//Route::get('/city/{title}', [App\Http\Controllers\PageController::class, 'citydestination']);
Route::get('/day-tours', [PageController::class, 'daytour']);
Route::get('/multiday-tours', [PageController::class, 'multidaytour']);
Route::get('/resorts', [PageController::class, 'resorts']);
Route::get('/honeymoon-resorts', [PageController::class, 'honeymoonresorts']);
Route::get('/family-resorts', [PageController::class, 'familyresorts']);
Route::get('/couple-resorts', [PageController::class, 'coupleresorts']);
Route::get('/all-inclusive-resort', [PageController::class, 'allinclusiveresort']);
Route::get('/resort-details/{slug}/{id}', [App\Http\Controllers\PageController::class, 'resortdetails']);

Route::get('/blog', [PageController::class, 'blogs']);
Route::get('/blog-page/{id}/{slug}', [App\Http\Controllers\PageController::class, 'blogpage']);
Route::get('/quote', [App\Http\Controllers\PageController::class, 'quote']);
Route::get('/placetovisit', [App\Http\Controllers\PageController::class, 'citydestination']);
Route::get('/things-to-do', [App\Http\Controllers\PageController::class, 'thingstodo']);

Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send.mail');
//Route::get('/day-tour-showdetails/{tour}', [DayTourDetailsController::class, 'daytourshowdetails'])
//    ->name('day_tours.showdetails');


Route::get('/experiences', [PageController::class, 'experiences']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/booking-cancellation-policy', [PageController::class, 'bookingcancellationpolicy']);
Route::get('/privacy-policy', [PageController::class, 'privacypolicy']);
Route::get('/terms-and-condition', [PageController::class, 'termscondition']);
Route::get('/our-team', [PageController::class, 'ourteam']);
Route::get('/faq', [PageController::class, 'faq']);

Route::get('/four-season', [PageController::class, 'fourseason']);
Route::get('/destination/{slug}/{id}', [App\Http\Controllers\PageController::class, 'destinationdetails']);
Route::get('/thingstodo/{slug}/{id}', [App\Http\Controllers\PageController::class, 'thingstododetails']);

Route::post('/quotenow', [QuoteController::class, 'store'])->name('quotenow');



