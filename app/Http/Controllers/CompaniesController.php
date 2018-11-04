<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store', 'edit', 'update', 'delete', 'destroy');
//        $this->middleware('company')->only('edit', 'update');
    }

    // get /companies get all companies
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', ['companies' => $companies]);
    }

    // get /companies/create create company page
    public function create()
    {
        return view('companies.create');
    }

    // post /companies create company
    public function store(CompanyRequest $request)
    {
        // can user create company
        $this->authorize('create', Company::class);

        //store
        $company = $request->user()->company()->create($request->only(
            ['category_id', 'name', 'slug', 'description', 'location', 'address', 'contact']// more 'sub_location', 'facebook'
        ));

        return redirect()->route('companies.show', ['company' => $company]);
    }

    // get /companies/{company} company page
    public function show(Company $company)
    {
        return view('companies.show', ['company' => $company]);
    }

    // get /companies/edit edit company page
    public function edit()
    {
        $company = Auth::user()->company;

        return view('companies.edit', ['company' => $company]);
    }

    // post /companies update company
    public function update(CompanyRequest $request)
    {
        $company = $request->user()->company;

        // can user update company
        $this->authorize('update', $company);

        // update
        $company->fill($request->only(
            ['name', 'slug', 'description', 'location', 'address', 'contact']// more 'sub_location'
        ));

        $company->save();

        return redirect()->route('companies.show', ['company' => $company]);
    }

    public function destroy($id)
    {
        //
    }

}
