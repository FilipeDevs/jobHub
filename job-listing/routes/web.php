<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;


Route::get('/', [Listing::class, 'all']);