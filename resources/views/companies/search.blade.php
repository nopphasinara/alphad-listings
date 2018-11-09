@extends('layouts.3col')

@section('middle')
    @include('partials.companies', ['companies' => $companies])
@endsection

