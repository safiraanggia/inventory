@extends('layouts.dashboard-operator')

@section('content')

<div class="d-flex align-items-center justify-content-between" style="padding-top:20px;">
    <a href="{{ route('datasupplier.create') }}" class="btn btn-primary">Tambah</a>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Supplier</th>
            <th>Perusahaan</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($supplier->count() > 0)
            @foreach($supplier as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_supplier }}</td>
                    <td class="align-middle">{{ $rs->nama_supplier }}</td>
                    <td class="align-middle">{{ $rs->nama_perusahaan }}</td>
                    <td class="align-middle">{{ $rs->no_telp_supplier }}</td>
                    <td class="align-middle">{{ $rs->alamat_supplier }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('datasupplier.edit', $rs->id_supplier)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('datasupplier.destroy', $rs->id_supplier) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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