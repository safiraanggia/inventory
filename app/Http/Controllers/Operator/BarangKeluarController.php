<?php

namespace App\Http\Controllers\Operator;

use Illuminate\Http\Request;
use App\Models\keluar;
use App\Models\product;
use App\Models\supplier;
use App\Models\User;
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
        $user = User::all();
        $supplier = supplier::all();
        $product = product::all();
        return view('pages.operator.barangkeluar.create', compact('product','supplier','user'));   
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $keluar = $request->all();
    $keluar['kode_keluar'] = 'K' . mt_rand(00, 99);

    if ($keluar['kode_keluar']) {
        keluar::create($keluar);

        return redirect()->route('barangkeluar.index')->with('Berhasil', 'Berhasil menambahkan data supplier!');
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
        $user = User::all();
        $supplier = supplier::all();
        $product = product::all();
 
        return view('pages.operator.barangkeluar.edit', compact('keluar','product','supplier','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_keluar)
    {
        $keluar = keluar::findOrFail($id_keluar);

        $user = User::all();
        $supplier = supplier::all();
        $product = product::all();
 
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
