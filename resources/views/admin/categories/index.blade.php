@extends('layouts.2col')

@section('middle')
    <a class="btn btn-primary mb-3" href="{{ route('admin.categories.create') }}">add new main category</a>

    @include('admin.partials.categories', ['categories' => $categories])
@endsection
