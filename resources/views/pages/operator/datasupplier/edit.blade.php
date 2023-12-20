@extends('layouts.dashboard-operator')

@section('content')

<h2 style="margin-top:20px;" class="mb-0">Edit Supplier</h2>
    <hr />
    <form action="{{ route('datasupplier.update', $supplier->id_supplier) }}" method="POST">
        @csrf
        @method('PUT')
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
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection