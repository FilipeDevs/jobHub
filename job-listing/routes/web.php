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

// Show edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Job Post
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Job Post
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

// Single job Post
Route::get('listings/{listing}', [ListingController::class, 'show']);