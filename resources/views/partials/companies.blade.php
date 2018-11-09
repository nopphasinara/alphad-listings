<ul class="list-group">
    @foreach($companies as $company)
        <li class="list-group-item  mb-2">
            <a href="{{ route('companies.show', ['company' => $company->id ]) }}">{{ $company->name }}</a>
            <p>{{ $company->description }}</p>
            <hr>
            <span>{{ $company->location }} - </span>
            <span>{{ $company->contact }}</span>
        </li>
    @endforeach
</ul>
