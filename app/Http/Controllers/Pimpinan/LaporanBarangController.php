<?php

namespace App\Http\Controllers\Pimpinan;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Controllers\Controller;

class LaporanBarangController extends Controller
{
    public function index()
    {
        // ngodingnya di sini yah
        return view('pages.pimpinan.laporanbarang.index');
    }
}
