<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// All job posts
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store job post
Route::post('listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Job Post
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Job Post
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Single job Post
Route::get('listings/{listing}', [ListingController::class, 'show']);

// Show Register Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'createLogin'])->name('login')->middleware('guest');

// Login user
Route::post('/login', [UserController::class, 'login']);