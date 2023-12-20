@extends('layouts.dashboard-operator')

@section('content')

<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('databarang.create') }}" class="btn btn-primary" style="margin-top:15px;">Tambah</a>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<h2 style="margin-bottom:15px;">Data Barang</h2>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($product->count() > 0)
            @foreach($product as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_product }}</td>
                    <td class="align-middle">{{ $rs->nama_product }}</td>
                    <td class="align-middle">{{ $rs->kategori }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a style="margin-right:10px" href="{{ route('databarang.edit', $rs->id_product)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('databarang.destroy', $rs->id_product) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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