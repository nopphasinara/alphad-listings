@extends('layouts.1col')

@include('partials.navbar')

@section('middle')

    <div class="row">
        <div class="col-md-6">
            @include('partials.search-companies')
        </div>
        <div class="col-md-6">
            @include('partials.search-listings')
        </div>
    </div>

@endsection