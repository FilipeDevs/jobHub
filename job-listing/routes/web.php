<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});