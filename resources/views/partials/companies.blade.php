<div class="card mb-3">
    <div class="card-header">Companies</div>

    <div class="card-body">
        <ul class="list-group">
            @foreach($companies as $company)
                <li class="list-group-item">
                    <a href="{{ route('companies.show', ['company' => $company->id ]) }}">{{ $company->name }}</a>
                </li>
            @endforeach
        </ul>

    </div>
</div>