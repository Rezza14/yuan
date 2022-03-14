<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PokeModel extends Model
{
    protected $table = 'siswa_tbl';
    protected $fillable = [
        'nis',
        'nama',
        'hobi',
        'umur',
        'alamat',
    ];
    public $timestamps = false;
}

