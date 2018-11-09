<ul class="list-group">
    @foreach($listings as $listing)
        <li class="list-group-item mb-2">
            <a href="{{ route('listings.show', ['listing' => $listing->id ]) }}">{{ $listing->title }}</a>
            - <a href="{{ route('companies.show', ['company' => $listing->company->id ]) }}">{{ $listing->company->name }}</a>
            <hr>
            <p>{{ $listing->description }}</p>
            @can('update', $listing)
                <a class="float-right" href="{{ route('listings.edit', ['listing' => $listing->id ]) }}">edit</a>
            @endcan
        </li>
    @endforeach
</ul>
