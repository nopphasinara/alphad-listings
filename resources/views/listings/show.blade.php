@extends('layouts.3col')

@section('middle')

    @include('partials.listing', ['listing'=> $listing])

@endsection

@section('left')
    @include('partials.company', ['company'=> $listing->company])
@endsection