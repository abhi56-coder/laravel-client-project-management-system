@extends('layouts.app')

@section('content')
<h1>Clients</h1>
<a href="/clients/create" class="btn btn-primary mb-3">Add Client</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Company</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->company_name }}</td>
                <td>{{ $client->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
