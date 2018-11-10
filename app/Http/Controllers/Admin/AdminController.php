<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $users_count  = User::count();
        $users_byLoc = User::all()->groupBy('location');

        $companies_count  = Company::count();
        $companies_byLoc = Company::all()->groupBy('location');
        $companies_byCategory = Company::all()->groupBy('category_id');

        $listings_count  = Listing::count();
        $listings_byCategory = Listing::all()->groupBy('category_id');

        return view('admin.index', [
            'users_count' => $users_count,
            'users_byLoc' => $users_byLoc,

            'companies_count' => $companies_count,
            'companies_byLoc' => $companies_byLoc,
            'companies_byCategory' => $companies_byCategory,

            'listings_count' => $listings_count,
            'listings_byCategory' => $listings_byCategory,
        ]);

    }

    public function users() {
        $users  = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function companies() {
        $companies  = Company::all()->load(['manger', 'category']);

        return view('admin.companies', ['companies' => $companies]);
    }

    public function listings() {
        $listings  = Listing::all()->load('company');

        return view('admin.listings', ['listings' => $listings]);
    }

}
