<?php

namespace App\Http\Controllers\Operator;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Controllers\Controller;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::orderBy('created_at', 'DESC')->get();
 
        return view('pages.operator.databarang.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.operator.databarang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->all();

        $product['kode_product'] = 'A'.mt_rand(00,99);
        if ($product['kategori'] === 'Makanan') {
            $product['kode_product'] = 'A'.mt_rand(00,99);
        } else if ($product['kategori'] === 'Minuman') {
            $product['kode_product'] = 'B'.mt_rand(00,99);
        } else if ($product['kategori'] === 'ATK') {
            $product['kode_product'] = 'C'.mt_rand(00,99);
        } else if ($product['kategori'] === 'Pakaian') {
            $product['kode_product'] = 'D'.mt_rand(00,99);
        } else if ($product['kategori'] === 'Aksesoris') {
            $product['kode_product'] = 'E'.mt_rand(00,99);
        }

        product::create($product);
 
        return redirect()->route('databarang.index')->with('Berhasil', 'Berhasil menambahkan data barang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_product)
    {
        $product = product::findOrFail($id_product);
 
        return view('pages.operator.databarang.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_product)
    {
        $product = product::findOrFail($id_product);
 
        $product->update($request->all());
 
        return redirect()->route('databarang.index')->with('Berhasil', 'Berhasil memperbarui data barang!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_product)
    {
        $product = product::findOrFail($id_product);
 
        $product->delete();
 
        return redirect()->route('databarang.index')->with('Berhasil', 'Berhasil menghapus data barang!');
    }
}
