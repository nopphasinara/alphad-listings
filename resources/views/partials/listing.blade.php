<div class="card mb-3">
    <div class="card-header">{{ $listing->title }}</div>
    {{--
    // todo
    --}}
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">description : {{ $listing->district }}</li>
            <li class="list-group-item">value : {{ $listing->value }}</li>
            <li class="list-group-item">attr-one : {{ $listing->attr_one }}</li>
            <li class="list-group-item">attr-two : {{ $listing->attr_two }}</li>
            <li class="list-group-item">extra : {{ $listing->extra }}</li>
            <li class="list-group-item">notes : {{ $listing->notes }}</li>
        </ul>
        @can('update', $listing)
            <a class="btn btn-info float-right mt-3" href="{{ route('listings.edit', ['listing' => $listing->id ]) }}">edit</a>
        @endcan

    </div>
</div>
