<div class="card mb-3">
    <div class="card-header">
        <a href="{{ route('categories.show', ['category' => $category->id]) }}">
            <span class="font-weight-bold">{{ $category->name }}</span> @ {{ $category->slug }}
        </a>
    </div>
    {{--<p class="m-3">{{$category->description}}</p>--}}
    {{--
    // todo
    --}}
    <div class="card-body">
        <ul class="list-group">
            @foreach($category->children as $child)
                <li class="list-group-item"><a href="{{ route('categories.show', ['category' => $child->id]) }}">{{$child->name}}</a></li>
            @endforeach

        </ul>

        {{--@foreach($category->images as $img)--}}
            {{--<img src="/storage/{{$img->path}}" alt="" class="img-fluid">--}}
        {{--@endforeach--}}

        {{--@if(Auth::check())--}}
            {{--<form action="{{ route('favorites.store', ['category' => $category]) }}" method="post" class="mt-4">--}}
                {{--@csrf--}}
                {{--<button class="btn btn-primary" type="submit">save</button>--}}
            {{--</form>--}}
        {{--@else--}}
            {{--<p>login to be able to favorite a category!</p>--}}
        {{--@endif--}}
    </div>
</div>
