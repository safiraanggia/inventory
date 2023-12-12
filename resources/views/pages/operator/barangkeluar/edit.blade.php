@extends('layouts.dashboard-operator')

@section('content')

<h1 class="mb-0">Tambah Barang Keluar</h1>
    <hr />
    <form action="{{ route('barangkeluar.update', $product->id_product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <select name="kategori" class="form-control">
                    @foreach($product as $id => $kode_product)
                        <option value="{{ $id }}">{{ $kode_product }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="kategori" class="form-control">
                    @foreach($supplier as $id => $kode_supplier)
                        <option value="{{ $id }}">{{ $kode_supplier }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="stok_keluar" class="form-control" placeholder="stok_keluar">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="tgl_keluar" class="form-control" placeholder="tgl_keluar">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection