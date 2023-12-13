@extends('layouts.dashboard-operator')

@section('content')

<h1 class="mb-0">Tambah Supplier</h1>
    <hr />
    <form action="{{ route('datasupplier.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
        <div class="row mb-3">
            <div class="col">
            <input type="text" name="nama_supplier" class="form-control" placeholder="Nama">
            </div></div>

            <div class="row mb-3">
            <div class="col">
            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Perusahaan">
            </div></div>

            <div class="row mb-3">
            <div class="col">
            <input type="text" name="no_telp_supplier" class="form-control" placeholder="No Telp">
            </div></div>

            <div class="row mb-3">
            <div class="col">
            <input type="text" name="alamat_supplier" class="form-control" placeholder="Alamat">
            </div></div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection