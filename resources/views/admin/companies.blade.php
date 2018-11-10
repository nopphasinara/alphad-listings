@extends('layouts.admin')

@section('content')

    <table class="table companies table-hover" id="companies-table" style="width: 100%">
        <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Manger Name</th>
            <th>Location</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($companies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->manger->name}}</td>
                <td>{{$company->location}}</td>
                <td>{{$company->category->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
