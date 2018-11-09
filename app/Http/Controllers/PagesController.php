<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    // dynamic home page
    public function index()
    {
        if( ! Auth::check()) {
            return view('welcome');
        }
        $listings = Listing::latest()->take(15);
        if(Auth::user()->isCompany()) {
            $listings = Auth::user()->load('company.listings');
        }
        return view('home', ['listings' => $listings]);
    }

}
