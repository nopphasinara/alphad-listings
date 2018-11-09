@extends('layouts.3col')

@section('left')
@endsection

@section('middle')
    @include('partials.company', ['company'=> Auth::user()->company])
    @include('partials.listings', ['listings'=> Auth::user()->company->listings])
@endsection

@section('right')
@endsection
