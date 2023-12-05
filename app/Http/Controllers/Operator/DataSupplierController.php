<?php

namespace App\Http\Controllers\Operator;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Http\Controllers\Controller;

class DataSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = supplier::orderBy('created_at', 'DESC')->get();
 
        return view('pages.operator.datasupplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.operator.datasupplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        supplier::create($request->all());
 
        return redirect()->route('datsupplier.index')->with('Berhasil', 'Berhasil menambahkan data supplier!');
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
 
        return view('pages.operator.datasupplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_supplier)
    {
        $supplier = supplier::findOrFail($id_supplier);
 
        $supplier->update($request->all());
 
        return redirect()->route('datasupplier.index')->with('Berhasil', 'Berhasil memperbarui data supplier!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_supplier)
    {
        $supplier = supplier::findOrFail($id_supplier);
 
        $supplier->delete();
 
        return redirect()->route('datasupplier.index')->with('Berhasil', 'Berhasil menghapus data supplier!');
    }
}
