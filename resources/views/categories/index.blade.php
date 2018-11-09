@extends('layouts.3col')

@section('middle')
    @include('partials.categories', ['categories' => $categories])
@endsection
