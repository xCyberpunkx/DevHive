<?php 
namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    // Fetches all listings, applies filtering (if any) and pagination, then returns the view
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show single listing
    // Fetches a single listing by its ID and returns the view
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show Create Form
    // Returns the view for creating a new listing
    public function create() {
        return view('listings.create');
    }

    // Store Listing Data
    // Validates and stores a new listing in the database
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store logo if uploaded
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            
        }

        // Associate the listing with the logged-in user
        $formFields['user_id'] = auth()->id();

        // Create the listing
        Listing::create($formFields);

        // Redirect to home with a success message
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show Edit Form
    // Returns the view for editing an existing listing
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listing Data
    // Validates and updates an existing listing in the database
    public function update(Request $request, Listing $listing) {
        // Ensure the logged-in user is the owner of the listing
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Store new logo if uploaded
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Update the listing
        $listing->update($formFields);

        // Redirect back with a success message
        return redirect('/')->with('message', 'Listing updated successfully!');
    }

    // Delete Listing
    // Deletes an existing listing from the database
    public function destroy(Listing $listing) {
        // Ensure the logged-in user is the owner of the listing
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        // Delete the logo file from storage if it exists
        if($listing->logo && Storage::disk('public')->exists($listing->logo)) {
            Storage::disk('public')->delete($listing->logo);
        }
        // Delete the listing
        $listing->delete();
        // Redirect to home with a success message
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // Manage Listings
    // Returns the view for managing listings created by the logged-in user
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
