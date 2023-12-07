<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = User::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.usermanagement.index', compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $User = User::all();
        return view('pages.admin.usermanagement.create', compact('User'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('usermanagement.index')->with('Berhasil', 'Berhasil menambahkan data user!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $User = User::findOrFail($id);
 
        return view('pages.admin.usermanagement.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $User = User::findOrFail($id);
 
        $User->update($request->all());
 
        return redirect()->route('usermanagement.index')->with('Berhasil', 'Berhasil memperbarui data user!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User = User::findOrFail($id);
 
        $User->delete();
 
        return redirect()->route('usermanagement.index')->with('Berhasil', 'Berhasil menghapus data user!');
    }
}
