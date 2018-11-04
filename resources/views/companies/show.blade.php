@extends('layouts.3col')

{{--@section('middle)--}}
{{--    @include('partials.listings', ['header'=>  $company->name, 'listings'=> $company->listings])--}}
{{--@endsection--}}

@section('right')
    @include('partials.company', ['company'=> $company])

{{--    @include('partials.companies', ['companies'=> $companies])--}}

@endsection
