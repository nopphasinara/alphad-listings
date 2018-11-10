<div class="card mb-3">
    <div class="card-header">
        <a href="{{ route('admin.categories.show', ['category' => $category->id]) }}">
            <span class="font-weight-bold">{{ $category->name }}</span> @ {{ $category->slug }}
        </a>
        <a class="float-right" href="{{ route('admin.categories.edit', ['category' => $category->id ]) }}">edit</a>
    </div>
    {{--<p class="m-3">{{$category->description}}</p>--}}
    {{--
    // todo
    --}}
    <div class="card-body">
        <ul class="list-group">
            @foreach($category->children as $child)
                <li class="list-group-item"><a href="{{ route('admin.categories.show', ['category' => $child->id]) }}">{{$child->name}}</a></li>
            @endforeach

             <a class="btn btn-secondary mt-3 float-right" href="{{ route('admin.categories.create', ['parent' => $category->id ]) }}">add new sub category</a>
        </ul>

        {{--@foreach($category->images as $img)--}}
            {{--<img src="/storage/{{$img->path}}" alt="" class="img-fluid">--}}
        {{--@endforeach--}}

        {{--@if(Auth::check())--}}
            {{--<form action="{{ route('admin.favorites.store', ['category' => $category]) }}" method="post" class="mt-4">--}}
                {{--@csrf--}}
                {{--<button class="btn btn-primary" type="submit">save</button>--}}
            {{--</form>--}}
        {{--@else--}}
            {{--<p>login to be able to favorite a category!</p>--}}
        {{--@endif--}}
    </div>
</div>
