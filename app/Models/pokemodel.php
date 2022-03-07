<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pokemodel extends Model
{
    protected $table = 'siswa_tbl';
    public function poker()
    {
       return DB::table('siswa_tbl')->get();
    }

    public function adddata($data)
    {
        return DB::table('siswa_tbl')->insert($data);
    }

    public function editdata($id, $data)
    {
         DB::table('siswa_tbl')
        ->where('id', $id)
        ->update($data);

    }

    public function deletedata($id)
    {
        DB::table('siswa_tbl')
        ->where('id', $id)
        ->delete();
    }
}

