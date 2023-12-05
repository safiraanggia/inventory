<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_supplier';

    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'nama_perusahaan',
        'no_telp_supplier',
        'alamat_supplier'
    ];

    public function masuk() {
        return $this->hasOne('App\Models\masuk');
    }
    public function keluar() {
        return $this->hasOne('App\Models\keluar');
    }
}
