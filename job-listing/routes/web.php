<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

// All job posts
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store job post
Route::post('listings', [ListingController::class, 'store']);

// Single job post
Route::get('listings/{listing}', [ListingController::class, 'show']);
