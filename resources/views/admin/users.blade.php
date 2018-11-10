@extends('layouts.admin')

@section('content')

    <table class="table users table-hover" id="users-table" style="width: 100%">
        <thead class="thead-dark">
        <tr>
            <th>Email</th>
            <th>Mobile</th>
            <th>Location</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->location}}</td>
                <td>{{$user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            alert('done');
            $('#users-table').DataTable({
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [-1] }
                ]
            })
        });
    </script>
@endsection