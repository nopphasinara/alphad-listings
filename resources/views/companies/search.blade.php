@extends('layouts.3col')

@section('middle')
    <h3>Companies in {{ $conditions['location'] }}</h3>
    @include('partials.companies', ['companies' => $companies])
    <a href="{{ route('companies.search', ['location' => $conditions['location']]) }}">companies in location</a>
@endsection

