@extends('layouts.dashboard-pimpinan')

@section('content')
    <h2>Laporan Barang</h2>
    <div class="d-flex align-items-center justify-content-between" style="padding-top:20px;">
    <a href="{{ route('pdfbarang') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
    </div>
    <hr></hr>
    <table class="table table-hover" id="table-1">
        <div class="col-md-6">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Total Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['data'] as $index => $item)
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $item['nama_product'] }}</td>
                    <td>{{ $item['total_jumlah_masuk'] }}</td>
                    <td>{{ $item['total_jumlah_keluar'] ?? 0 }}</td>
                    <td>{{ $item['total_stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

