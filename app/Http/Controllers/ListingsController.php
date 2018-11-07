<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'search');
        $this->middleware('company')->only('create', 'store', 'edit', 'update');
    }

    // get /listings get all listings
    public function index()
    {
        $listings = Listing::all()->load('company');

        return view('listings.index', ['listings' => $listings]);
    }

    // get /listings/create add new listing
    public function create()
    {

        return view('listings.create');
    }

    // post /listings store new listing
    public function store(ListingRequest $request)
    {
        //store
        $company = $request->user()->company;

        //authorize

        $listing = $company->listings()->create($request->only(
            ['title', 'attr_one', 'attr_two', 'value', 'category_id', 'description', 'extra', 'notes']
        ));

        return redirect()->action('ListingsController@show', ['listing' => $listing]);
    }

    // get /listings/{listing} listing's page
    public function show(Listing $listing)
    {
        $listing->load('company');

        $recommendations = Listing::search($listing->only(['attr_one', 'attr_two']));

        return view('listings.show', ['listing' => $listing, 'recommendations' => $recommendations]);
    }

    // get /listings/search search for listings by attribute
    public function search(ListingRequest $request) {
//        $request->validate([
//        ]);

        $conditions = $request->only(['attr_one', 'attr_two']);

        $listings = Listing::search($conditions);

        return view('listings.search', ['listings' => $listings, 'conditions' => $conditions]);
    }

    // get /listings/{listing}/edit listing's edit page
    public function edit(Listing $listing)
    {
        // can user edit listing
        $this->authorize('update', $listing);

        return view('listings.edit', ['listing' => $listing]);
    }

    // patch /listings/{listing} listing's save edit
    public function update(ListingRequest $request, Listing $listing)
    {
        // can user edit listing
        $this->authorize('update', $listing);

        //update
        $listing->fill($request->only(
            ['title', 'attr-one', 'attr-two', 'value', 'category_id', 'description', 'extra', 'notes']
        ));

        $listing->save();

        return redirect()->action('ListingsController@show' , ['listing' => $listing]);
    }

    public function destroy($id)
    {
        //
    }

}
