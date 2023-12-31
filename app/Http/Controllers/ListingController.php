<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Get and show all listings (order by post time, latest job post appear first + pagination)
    public function index()
    {

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
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

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Job was posted sucessfully !');
    }

    // Show edit Form
    public function edit(Listing $listing)
    {

        // Make sure logged in user is owner before updating
        if ($listing->user_id != auth()->id()) {
            abort(403);
        }

        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Job Post
    public function update(Request $request, Listing $listing)
    {
        // Make sure logged in user is owner before updating
        if ($listing->user_id != auth()->id()) {
            abort(403);
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // update job post
        $listing->update($formFields);



        return back()->with('message', 'Job was updated sucessfully !');
    }

    // Delete Listing
    public function delete(Listing $listing)
    {
        // Make sure logged in user is owner before updating
        if ($listing->user_id != auth()->id()) {
            abort(403);
        }

        $listing->delete();

        return redirect('/')->with('message', 'Job Post deleted sucessfully !');
    }

    // Manage Job Posts
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}