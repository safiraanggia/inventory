@extends('layouts.dashboard-operator')

@section('content')

<h2 style="margin-top:20px;" class="mb-0">Tambah Barang</h2>
    <hr />
    <form action="{{ route('databarang.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_product" class="form-control" placeholder="Nama Product">
            </div>
        </div>
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
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection