<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pokehmodel;

class inicontroller extends Controller
{
    public function __construct(){
        $this->pokehmodel = new pokehmodel();
    }


    public function pokehh()
    {
        $data = [
            'pokerr' => $this->pokehmodel->pokre(),
        ];
        return view('table_pes', $data);
    }
}
