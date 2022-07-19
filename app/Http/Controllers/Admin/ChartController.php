<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insumo;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index (){
        $licens = Insumo::all();

        $puntos =[];
        foreach($licens as $licen){
            $puntos[] = ['name' => $licen['tipo_id'], 'y' => $licen['licenciatura_id'] ];
        }
        return view('admin.charts.index', ["data" => json_encode($puntos)]);
    }
}