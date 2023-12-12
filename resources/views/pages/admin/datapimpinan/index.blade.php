@extends('layouts.dashboard-admin')

@section('content')

<table class="table">
    tes
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($User as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection