<?php

namespace App\Http\Controllers\Pimpinan;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\masuk;
use App\Models\keluar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class LaporanBarangController extends Controller
{

    public function index()
{
    $data['title'] = "Laporan Barang";

    // Ambil data dari tabel masuk dengan menambahkan kategori 'masuk'
    $dataMasuk = DB::table('masuks')
        ->select('nama_product', 'stok_masuk as jumlah_masuk', DB::raw("null as jumlah_keluar"))
        ->groupBy('nama_product', 'stok_masuk');

    // Ambil data dari tabel keluar dengan menambahkan kategori 'keluar'
    $dataKeluar = DB::table('keluars')
        ->select('nama_product', DB::raw("null as jumlah_masuk"), 'stok_keluar as jumlah_keluar')
        ->groupBy('nama_product', 'stok_keluar');

    // Gabungkan data masuk dan keluar pada satu tabel sementara
    $mergedData = $dataMasuk->unionAll($dataKeluar)->get();

    // Grupkan hasil penggabungan berdasarkan nama_product
    $groupedData = $mergedData->groupBy('nama_product');

    // Transformasi data untuk menghitung total stok
    $data['data'] = $groupedData->map(function ($items) {
        $result = [
            'nama_product' => $items->first()->nama_product,
            'total_jumlah_masuk' => $items->sum('jumlah_masuk'),
            'total_jumlah_keluar' => $items->sum('jumlah_keluar'),
            'total_stok' => $items->sum('jumlah_masuk') - $items->sum('jumlah_keluar'),
        ];
        return $result;
    });
    

    return view('pages.pimpinan.laporanbarang.index', compact('data'));
}
public function pdfbarang()
{
    $data['data'] = [];

    // Ambil data dari tabel masuk dengan menambahkan kategori 'masuk'
    $dataMasuk = DB::table('masuks')
        ->select('nama_product', 'stok_masuk as jumlah_masuk', DB::raw("null as jumlah_keluar"))
        ->groupBy('nama_product', 'stok_masuk')
        ->get();

    // Ambil data dari tabel keluar dengan menambahkan kategori 'keluar'
    $dataKeluar = DB::table('keluars')
        ->select('nama_product', DB::raw("null as jumlah_masuk"), 'stok_keluar as jumlah_keluar')
        ->groupBy('nama_product', 'stok_keluar')
        ->get();

    // Gabungkan data masuk dan keluar pada satu tabel sementara
    $mergedData = $dataMasuk->merge($dataKeluar);

    // Grupkan hasil penggabungan berdasarkan nama_product
    $groupedData = $mergedData->groupBy('nama_product');

    // Transformasi data untuk menghitung total stok
    $data['data'] = $groupedData->map(function ($items) {
        $result = [
            'nama_product' => $items->first()->nama_product,
            'total_jumlah_masuk' => $items->sum('jumlah_masuk'),
            'total_jumlah_keluar' => $items->sum('jumlah_keluar'),
            'total_stok' => $items->sum('jumlah_masuk') - $items->sum('jumlah_keluar'),
        ];
        return $result;
    });

    return view('pages.pimpinan.laporanbarang.pdfbarang', compact('data'));
}
}
