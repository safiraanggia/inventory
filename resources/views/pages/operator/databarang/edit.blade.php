@extends('layouts.dashboard-operator')

@section('content')

<h1 class="mb-0">Tambah Barang</h1>
    <hr />
    <form action="{{ route('databarang.update', $product->id_product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama</label>
                <input type="text" name="nama_product" class="form-control" placeholder="Nama product">
            </div>
        </div>
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <select name="kategori" class="form-control">
                        <option value="" disabled selected>Select Variant</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="ATK">ATK</option>
                        <option value="Pakaian">Pakaian</option>
                        <option value="Aksesoris">Aksesoris</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection