<?php

namespace App\Http\Controllers\Operator;

use Illuminate\Http\Request;
use App\Models\masuk;
use App\Http\Controllers\Controller;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masuk = masuk::orderBy('created_at', 'DESC')->get();
 
        return view('pages.operator.barangmasuk.index', compact('masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.operator.barangmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        masuk::create($request->all());
 
        return redirect()->route('barangmasuk.index')->with('Berhasil', 'Berhasil menambahkan data barang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_masuk)
    {
        $masuk = masuk::findOrFail($id_masuk);
 
        return view('pages.operator.barangmasuk.edit', compact('masuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_masuk)
    {
        $masuk = masuk::findOrFail($id_masuk);
 
        $masuk->update($request->all());
 
        return redirect()->route('barangmasuk.index')->with('Berhasil', 'Berhasil memperbarui data barang!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_masuk)
    {
        $masuk = masuk::findOrFail($id_masuk);
 
        $masuk->delete();
 
        return redirect()->route('barangmasuk.index')->with('Berhasil', 'Berhasil menghapus data barang!');
    }
}
