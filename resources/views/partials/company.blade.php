{{--<img class="img-fluid" src="storage/{{$company->avatar->path}}" alt="">--}}
<ul class="list-group bg-white p-3 mb-2">
    <h3>{{ $company->name }}</h3>
    <li class="list-group-item">{{ $company->description }}</li>
    <li class="list-group-item">{{ $company->location }}</li>
    {{--<li class="list-group-item">{{ $company->sub-location }}</li>--}}
    <li class="list-group-item">{{ $company->address }}</li>
    <li class="list-group-item">{{ $company->contact }}</li>
</ul>