<?php

namespace App\Http\Controllers\Pimpinan;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Http\Controllers\Controller;

class LaporanSupplierController extends Controller
{
    public function index()
    {
        $supplier = supplier::orderBy('created_at', 'DESC')->get();// ngodingnya di sini yah
        return view('pages.pimpinan.laporansupplier.index', compact('supplier'));
    }
    public function pdfsupplier()
    {
        $supplier = supplier::orderBy('created_at', 'DESC')->get();// ngodingnya di sini yah
        return view('pages.pimpinan.laporansupplier.pdfsupplier', compact('supplier'));
    }

    public function create()
    {
        return view('pages.pimpinan.laporansupplier.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $supplier = $request->all();
    $supplier['kode_supplier'] = 'S' . mt_rand(00, 99);

    if ($supplier['kode_supplier']) {
        supplier::create($supplier);

        return view('pages.pimpinan.laporansupplier.index')->with('Berhasil', 'Berhasil menambahkan data supplier!');
    }
}
    /**
     * Display the specified resource.
     */
    public function show(string $id_supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_supplier)
    {
        $supplier = supplier::findOrFail($id_supplier);
 
        return view('pages.pimpinan.laporansupplier.index', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_supplier)
    {
        $supplier = supplier::findOrFail($id_supplier);
 
        $supplier->update($request->all());
 
        return view('pages.pimpinan.laporansupplier.index')->with('Berhasil', 'Berhasil memperbarui data supplier!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_supplier)
    {
        $supplier = supplier::findOrFail($id_supplier);
 
        $supplier->delete();
 
        return view('pages.pimpinan.laporansupplier.index')->with('Berhasil', 'Berhasil menghapus data supplier!');
    }
}
