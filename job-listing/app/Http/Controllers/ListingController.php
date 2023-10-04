<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Get and show all listings (order by post time, latest job post appear first)
    public function index()
    {

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show Create form
    public function create()
    {
        return view('listings.create');
    }

    // Store job post data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);



        return redirect('/')->with('message', 'Job was posted sucessfully !');
    }
}
