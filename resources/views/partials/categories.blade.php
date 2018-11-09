<div class="row">
@foreach($categories as $category)
        <div class="col-md-6">
                <div class="bg-white p-3 mb-3">
                        <a href="{{ route('categories.show', ['category' => $category->id]) }}">
                                <span class="font-weight-bold">{{ $category->name }}</span> @ {{ $category->slug }}
                        </a>
                        <hr>
                        <ul class="list-group">
                                @foreach($category->children as $child)
                                        <li class="list-group-item"><a href="{{ route('categories.show', ['category' => $child->id]) }}">{{$child->name}}</a></li>
                                @endforeach
                        </ul>
                </div>
        </div>
    @endforeach
</div>
