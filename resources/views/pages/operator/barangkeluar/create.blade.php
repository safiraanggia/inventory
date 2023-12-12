@extends('layouts.dashboard-operator')

@section('content')

<h1 class="mb-0">Tambah Barang Keluar</h1>
    <hr />
    <form action="{{ route('barangkeluar.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <select name="kode_product" class="form-control">
                    @foreach($product as $pr)
                        <option value="{{ $pr->kode_product }}">{{ $pr->kode_product }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="kategori" class="form-control">
                    @foreach($supplier as $sp)
                        <option value="{{ $sp->kode_supplier }}">{{ $sp->kode_supplier }}</option>
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
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection