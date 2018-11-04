<div class="card">
    <div class="card-header">
        {{ $company->name }}
    </div>

    <div class="card-body">
        {{--<img class="img-fluid" src="storage/{{$company->avatar->path}}" alt="">--}}
        <ul class="list-group">
            <li class="list-group-item">{{ $company->description }}</li>
            <li class="list-group-item">{{ $company->location }}</li>
            {{--<li class="list-group-item">{{ $company->sub-location }}</li>--}}
            <li class="list-group-item">{{ $company->address }}</li>
            <li class="list-group-item">{{ $company->contact }}</li>
        </ul>
    </div>
</div>