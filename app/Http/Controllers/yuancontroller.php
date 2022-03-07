<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class yuancontroller extends Controller
{

    public function index()
    {
        $data = [
            'nama_siswa' => 'Rezza Adeyuansyah',
            'kelas'     => 'RPL B'
        ];
        return view('holla', $data);
    }

    public function tentang($id)
    {
        return 'ini halaman about ' . $id;
    }


}
