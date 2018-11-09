<ul class="list-group bg-white p-3 mb-3">
    <h3>{{ $listing->title }}</h3>
    <li class="list-group-item">description : {{ $listing->description }}</li>
    <li class="list-group-item">value : {{ $listing->value }}</li>
    <li class="list-group-item">attr-one : {{ $listing->attr_one }}</li>
    <li class="list-group-item">attr-two : {{ $listing->attr_two }}</li>
    <li class="list-group-item">extra : {{ $listing->extra }}</li>
    <li class="list-group-item">notes : {{ $listing->notes }}</li>
</ul>
@can('update', $listing)
    <a class="btn btn-info float-right mt-3" href="{{ route('listings.edit', ['listing' => $listing->id ]) }}">edit</a>
@endcan
