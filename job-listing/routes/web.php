<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Show Register Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Logout user
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'createLogin']);

// Login user
Route::post('/login', [UserController::class, 'login']);