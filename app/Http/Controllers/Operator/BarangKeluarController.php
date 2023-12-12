<?php

namespace App\Http\Controllers\Operator;

use Illuminate\Http\Request;
use App\Models\keluar;
use App\Models\product;
use App\Models\supplier;
use App\Http\Controllers\Controller;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluar = keluar::orderBy('created_at', 'DESC')->get();

        return view('pages.operator.barangkeluar.index', compact('keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = product::select('id_product', 'kode_product')->get();
        $supplier = supplier::select('id_supplier', 'kode_supplier')->get();
        return view('pages.operator.barangkeluar.create', compact('product','supplier'));   
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $keluar = $request->all();
    $keluar['kode_keluar'] = 'K' . mt_rand(00, 99);

    // Ambil nilai 'kode_supplier' dari request (form)
    $supplier = $request->input('kode_supplier');

    // Ambil informasi 'supplier' berdasarkan 'kode_supplier' dari model 'Supplier'
    $supplier = supplier::where('kode_supplier', $supplier)->first();

    // Pastikan 'supplier' ditemukan dan memiliki 'kode_supplier'
    if ($supplier && $supplier->kode_supplier) {
        // Masukkan nilai 'kode_supplier' dari 'supplier' ke dalam 'keluar'
        $keluar['kode_supplier'] = $supplier->kode_supplier;

        // Simpan data ke dalam tabel 'keluar'
        keluar::create($keluar);

        return redirect()->route('barangkeluar.index')->with('Berhasil', 'Berhasil menambahkan data supplier!');
    } else {
        // Handle jika 'supplier' tidak ditemukan
        return redirect()->route('barangkeluar.index')->with('Gagal', 'Kode supplier tidak valid!');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id_keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_keluar)
    {
        $keluar = keluar::findOrFail($id_keluar);
 
        return view('pages.operator.barangkeluar.edit', compact('keluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_keluar)
    {
        $keluar = keluar::findOrFail($id_keluar);
 
        $keluar->update($request->all());
 
        return redirect()->route('barangkeluar.index')->with('Berhasil', 'Berhasil memperbarui data barang!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_keluar)
    {
        $keluar = keluar::findOrFail($id_keluar);
 
        $keluar->delete();
 
        return redirect()->route('barangkeluar.index')->with('Berhasil', 'Berhasil menghapus data barang!');
    }
}
