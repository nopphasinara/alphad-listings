@extends('layouts.3col')

@section('middle')
    @include('partials.listings', ['listings'=> $company->listings])
@endsection

@section('right')
    @include('partials.company', ['company'=> $company])
@endsection

@section('left')

    @include('partials.companies', ['companies'=> $recommendations])

@endsection
