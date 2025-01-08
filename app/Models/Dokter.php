<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = [
        'user_id', // tambahkan kolom user_id
        'nama',
        'jk',
        'ttl',
        'nik',
        'telepon',
        'alamat',
        // tambahkan kolom lain yang diperlukan
    ];
        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
