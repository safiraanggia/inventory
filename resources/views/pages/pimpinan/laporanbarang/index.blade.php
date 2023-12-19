@extends('layouts.dashboard-pimpinan')

@section('content')
    <h2>Laporan Barang</h2>
    <div class="d-flex align-items-center justify-content-between" style="padding-top:20px;">
    <a href="{{ route('pdfbarang') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
    </div>
    <hr>
    <table class="table table-hover" id="table-1">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Total Stock</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach($data['data'] as $item)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $item['nama_product'] }}</td>
                    <td>{{ $item['total_jumlah_masuk'] }}</td>
                    <td>{{ $item['total_jumlah_keluar'] ?? 0 }}</td>
                    <td>{{ $item['total_stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection

