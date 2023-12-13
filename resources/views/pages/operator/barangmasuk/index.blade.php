@extends('layouts.dashboard-operator')

@section('content')

<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('barangmasuk.create') }}" class="btn btn-primary">Tambah</a>
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
            <th>Nama User</th>
            <th>Kode Masuk</th>
            <th>Kode Produk</th>
            <th>Kode Supplier</th>
            <th>Stok Masuk</th>
            <th>Tanggal Masuk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($masuk->count() > 0)
            @foreach($masuk as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->User->name  }}</td>
                    <td class="align-middle">{{ $rs->kode_masuk }}</td>
                    <td class="align-middle">{{ $rs->product->nama_product }}</td>
                    <td class="align-middle">{{ $rs->supplier->nama_supplier }}</td>
                    <td class="align-middle">{{ $rs->stok_masuk }}</td>
                    <td class="align-middle">{{ $rs->tgl_masuk }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('barangmasuk.edit', $rs->id_masuk)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barangmasuk.destroy', $rs->id_masuk) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                <td class="text-center" colspan="8">Product not found</td>
            </tr>
        @endif
    </tbody>
</table>

@endsection