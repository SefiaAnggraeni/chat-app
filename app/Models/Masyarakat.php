<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    // Menambahkan 'user_id' ke dalam fillable
    protected $fillable = [
        'user_id', // tambahkan kolom user_id
        'nik',
        'nama',
        'jk',
        'ttl',
        'telepon',
        'alamat',
        // tambahkan kolom lain yang diperlukan
    ];

    /**
     * Relasi Masyarakat ke User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
