@extends('layouts.dashboard-admin')

@section('content')

<style>
    table, thead, tr, th, tbody {
        padding: 20px;
    }
</style>

<div class="d-flex align-items-center justify-content-between" style="padding:20px;">
    <a href="{{ route('usermanagement.create') }}" class="btn btn-primary">Tambah</a>
</div>

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover p-4">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($User->count() > 0)
            @foreach($User as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->name }}</td>
                    <td class="align-middle">{{ $rs->roles }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example" >
                            <a href="{{ route('usermanagement.edit', $rs->id)}}" type="button" style="margin-right: 10px;" class="btn btn-warning">Edit</a>
                            <form action="{{ route('usermanagement.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
        @endif
    </tbody>
</table>

@endsection