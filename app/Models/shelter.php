<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shelter extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_shelter';
    // protected $fillable = [
    //     'dokter_nama',
    //     'telepon',
    //     'dokter_Ttl',
    //     'dokter_JK',
    //     'dokter_NIK',
    //     'alamat',
    //     'email',
    //     'password',
    // ];
}

