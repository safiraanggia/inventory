@extends('layouts.dashboard-operator')

@section('content')

<h1 class="mb-0">Tambah Barang Keluar</h1>
    <hr />
    <form action="{{ route('barangkeluar.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <select name="name" class="form-control">
                    @foreach($user as $us)
                        <option value="{{ $us->id }}">{{ $us->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="nama_product" class="form-control">
                    @foreach($product as $pr)
                        <option value="{{ $pr->id_product }}">{{ $pr->nama_product }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="nama_supplier" class="form-control">
                    @foreach($supplier as $sp)
                        <option value="{{ $sp->id_supplier }}">{{ $sp->nama_supplier }}</option>
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