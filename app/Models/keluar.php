<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_keluar';

    protected $fillable = [
        'kode_keluar',
        'nama_supplier',
        'nama_product',
        'name',
        'stok_keluar',
        'tgl_keluar'
    ];

    public function product() {
        return $this->belongsTo('App\Models\product', 'nama_product');
    }

    public function supplier() {
        return $this->belongsTo('App\Models\supplier', 'nama_supplier');
    }
    public function User() {
        return $this->belongsTo('App\Models\User', 'name');
    }
}
