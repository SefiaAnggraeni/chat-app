<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelPublic extends Model
{ 
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_artikel';

    // protected $table = "tb_artikel";
    // protected $primarykey = 'artikel_id';
    // protected $fillable = [
    //     'artikel_id',
    //     'artikel_image',
    //     'artikel_teks',
    //     'status_artikel',
    // ];
}
