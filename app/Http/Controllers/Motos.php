<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Motos extends Controller
{
    public $moto = 'mt-03';
    public $sonho = "Vai acontecer";
    public function modelo()
    {
        return view('modelo',['modelo'=>$this->moto, 'sonho'=>$this->sonho]);
    }
}
