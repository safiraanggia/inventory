@extends('layouts.dashboard-pimpinan')

@section('content')

<div class="d-flex align-items-center justify-content-between" style="padding-top:20px;">
    <a href="{{ route('pdfsupplier') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
</div>
<hr>
<h2 style="margin-bottom:10px;">Laporan Supplier</h2>
<form action="{{ route('laporansupplier-cari') }}" method="GET">
    <div class="input-group mb-3">
        <input type="text" name="cari" class="form-control" placeholder="Cari Nama Supplier">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" style="margin-left: 10px;">Cari</button>
        </div>
    </div>
</form>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Supplier</th>
            <th>Perusahaan</th>
            <th>No Telp</th>
            <th>Alamat</th>
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