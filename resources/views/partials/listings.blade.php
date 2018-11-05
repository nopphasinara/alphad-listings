<div class="card mb-3">
    <div class="card-header">Listings</div>

    <div class="card-body">
        <ul class="list-group">
            @foreach($listings as $listing)
                <li class="list-group-item">
                    <a href="{{ route('listings.show', ['listing' => $listing->id ]) }}">{{ $listing->title }}</a>
                    @can('update', $listing)
                        <a class="float-right" href="{{ route('listings.edit', ['listing' => $listing->id ]) }}">edit</a>
                    @else
                        <a class="float-right" href="{{ route('companies.show', ['company' => $listing->company->id ]) }}">{{ $listing->company->name }}</a>
                    @endcan
                </li>
            @endforeach
        </ul>

    </div>
</div>