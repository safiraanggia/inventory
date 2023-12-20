@extends('layouts.dashboard-operator')

@section('content')

<h2 style="margin-top:15px;" class="mb-0">Tambah Barang Keluar</h2>
    <hr />
    <form action="{{ route('barangkeluar.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <select name="name" class="form-control">
                     <option value="" disabled selected>Select User</option>
                    @foreach($user as $us)
                        <option value="{{ $us->id }}">{{ $us->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="nama_product" class="form-control">
                     <option value="" disabled selected>Select Product</option>
                    @foreach($product as $pr)
                        <option value="{{ $pr->nama_product }}">{{ $pr->nama_product }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="nama_supplier" class="form-control">
                     <option value="" disabled selected>Select Supplier</option>
                    @foreach($supplier as $sp)
                        <option value="{{ $sp->id_supplier }}">{{ $sp->nama_supplier }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="stok_keluar" class="form-control" placeholder="Stok Keluar">
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