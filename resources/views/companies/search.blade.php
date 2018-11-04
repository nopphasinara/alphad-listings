@extends('layouts.3col')

@section('content')
    <h3>Agencies in {{ $gov }}</h3>
    @include('partials.companies', ['companies' => $companies])
@endsection

