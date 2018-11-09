<h3>{{ $category->name }} @ {{ $category->slug }}</h3>

<p class="bg-white p-2 mt-3">
    @foreach($category->root() as $root)
        <a href="{{ route('categories.show', ['category' => $root->id]) }}">{{$root->name}}</a>  >>
    @endforeach
</p>
<hr>
<p> {{ $category->description }}</p>

<ul class="list-group mt-3">
    @foreach($category->children as $child)
        <li class="list-group-item"><a href="{{ route('categories.show', ['category' => $child->id]) }}">{{$child->name}}</a></li>
    @endforeach
</ul>

<ul class="list-group mt-3">
    @if($category->isLeaf())
        @include('partials.listings', ['listings'=> $category->listings])
    @endif
</ul>
