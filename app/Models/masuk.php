<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_masuk';

    protected $fillable = [
        'kode_masuk',
        'nama_supplier',
        'nama_product',
        'name',
        'stok_masuk',
        'tgl_masuk'
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
