<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'kode_product',
        'nama_product',
        'kategori'
    ];

    public function masuk() {
        return $this->hasOne('App\Models\masuk');
    }
    public function keluar() {
        return $this->hasOne('App\Models\keluar');
    }
}
