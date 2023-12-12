@extends('layouts.dashboard-operator')

@section('content')

<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('barangkeluar.create') }}" class="btn btn-primary">Tambah</a>
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
            <th>Kode Keluar</th>
            <th>Kode Produk</th>
            <th>Kode Supplie</th>
            <th>Stok Keluar</th>
            <th>Tanggal Keluar</th>
        </tr>
    </thead>
    <tbody>
        @if($keluar->count() > 0)
            @foreach($keluar as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_keluar }}</td>
                    <td class="align-middle">{{ $rs->kode_product }}</td>
                    <td class="align-middle">{{ $rs->kode_supplier }}</td>
                    <td class="align-middle">{{ $rs->stok_keluar }}</td>
                    <td class="align-middle">{{ $rs->tgl_keluar }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('barangkeluar.edit', $rs->id_product)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barangkeluar.destroy', $rs->id_product) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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