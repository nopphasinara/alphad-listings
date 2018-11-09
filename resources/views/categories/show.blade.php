@extends('layouts.3col')

@section('middle')
    <h3>{{ $category->name }} @ {{ $category->slug }}</h3>
    <p>{{ $category->depth() }}</p>
    <p> {{ $category->description }}</p>

    <ul class="list-group mt-3">
        @foreach($category->root() as $root)
            <a href="{{ route('categories.show', ['category' => $root->id]) }}">{{$root->name}}</a>  >>
        @endforeach
    </ul>

    <ul class="list-group mt-3">
        @foreach($category->children as $child)
            <li class="list-group-item"><a href="{{ route('categories.show', ['category' => $child->id]) }}">{{$child->name}}</a></li>
        @endforeach
    </ul>

    <ul class="list-group mt-3">
        @if($category->isLeaf())
            @foreach($category->listings as $listing)
                <li class="list-group-item"><a href="{{ route('listings.show', ['listing' => $listing->id]) }}">{{$listing->title}}</a></li>
            @endforeach
        @endif
    </ul>

@endsection

