@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <h2>Users Statistic</h2>
        <div class="row">
            <div class="card col-md-4">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary">Users Count</h5>
                    <p class="card-text"><h3 class="display-3">{{ $users_count }}</h3></p>
                </div>
            </div>
            <div class="card col-md-6">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary mt-3">Users by Location</h5>
                    @foreach ($users_byLoc as $loc => $user)
                        <p class="card-text mt-3">{{$loc}} ({{$user->count()}})</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{$user->count()/$users_count*100}}%"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <h2>Companies Statistic</h2>
        <div class="row">
            <div class="card col-md-4">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary mb-4">Companies Counts</h5>
                    <p class="card-text"><h3 class="display-3">{{ $companies_count }}</h3></p>
                </div>
            </div>
            <div class="card col-md-4">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary mb-4">Companies by Category</h5>
                    @foreach ($companies_byCategory as $category => $company)
                        <p class="card-text mt-3">{{$category}} ({{$company->count()}})</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{$company->count()/$companies_count*100}}%" ></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card col-md-4">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary mb-4">Companies by Location</h5>
                    @foreach ($companies_byLoc as $loc => $company)
                        <p class="card-text mt-3">{{$loc}} ({{$company->count()}})</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{$company->count()/$companies_count*100}}%" ></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <h2>Listings Statistic</h2>
        <div class="row">
            <div class="card col-md-4">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary mb-4">Listings Counts</h5>
                    <p class="card-text"><h3 class="display-3">{{ $listings_count }}</h3></p>
                </div>
            </div>
            <div class="card col-md-4">
                <div class="card-body  text-center">
                    <h5 class="card-title text-secondary mb-4">Listing by Category</h5>
                    @foreach ($listings_byCategory as $category => $listing)
                        <p class="card-text mt-3">{{$category}} ({{$listing->count()}})</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{$listing->count()/$listings_count*100}}%" ></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
