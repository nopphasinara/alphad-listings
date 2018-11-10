@extends('layouts.admin')

@section('content')

    <table class="table users table-hover" id="questions-table" style="width: 100%">
        <thead class="thead-dark">
        <tr>
            <th>title</th>
            <th>description</th>
            <th>company</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($listings as $listing)
            <tr>
                <td>{{$listing->title}}</td>
                <td>{{$listing->description}}</td>
                <td>{{$listing->company->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
