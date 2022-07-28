<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VinsumoController extends Controller
{
    public function vinsumo (){
        return view('vinsumo');
    }
}