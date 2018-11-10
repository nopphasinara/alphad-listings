@extends('layouts.admin')

@section('content')

    <h3>{{ $category->name }} @ {{ $category->slug }}</h3>

    <p> {{ $category->description }}</p>

    <a class="btn btn-secondary mt-3" href="{{ route('admin.categories.create', ['parent' => $category->id ]) }}">add new sub category</a>
    <a class="btn btn-warning  mt-3" href="{{ route('admin.categories.edit', ['category' => $category->id ]) }}">edit</a>

    <ul class="list-group mt-3">
        @foreach($category->children as $child)
            <li class="list-group-item"><a href="{{ route('admin.categories.show', ['category' => $child->id]) }}">{{$child->name}}</a></li>
        @endforeach
    </ul>

    <ul class="list-group mt-3">
        @if($category->isLeaf())
            @foreach($category->listings as $listing)
                <li class="list-group-item"><a href="{{ route('admin.listings.show', ['listing' => $listing->id]) }}">{{$listing->title}}</a></li>
            @endforeach
        @endif
    </ul>

@endsection

