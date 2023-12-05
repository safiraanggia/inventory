<?php

namespace App\Http\Controllers\Pimpinan;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Http\Controllers\Controller;

class LaporanSupplierController extends Controller
{
    public function index()
    {
        // ngodingnya di sini yah
        return view('pages.pimpinan.laporansupplier.index');
    }
}
