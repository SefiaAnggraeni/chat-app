<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapuskeswan extends Model
{
    protected $fillable = [
        'image',
        'nama_puskeswan',
        'deskripsi',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'kelurahan_desa',
        'dusun',
        'rt',
        'rw',
        'longitude',
        'latitude',
        'hari1',
        'hari2',
        'jam_buka',
        'jam_tutup',
        'narahubung',
    ];
}
