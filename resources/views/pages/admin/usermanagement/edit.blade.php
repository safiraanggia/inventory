@extends('layouts.dashboard-admin')

@section('content')

<h1 class="mb-0">Tambah User</h1>
    <hr />
    <form action="{{ route('usermanagement.update', $User->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="roles" placeholder="roles" class="form-control">
                    <option value="operator">Operator</option>
                    <option value="pimpinan">Pimpinan</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection