<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insumo;
use Carbon\Carbon;

class ReporteController extends Controller
{
    public function reporte_dia(){
        $insumos = Insumo::whereDate('fecha_horaSol',Carbon::today())->get();
  
        
        return view('admin.reportes.reporte_dia',compact('insumos'));
    }
    public function reportes_fecha(){
        $insumos = Insumo::whereDate('fecha_horaSol',Carbon::today())->get();
        
        
        return view('admin.reportes.reportes_fecha',compact('insumos'));
    }

   
    public function reportes_res(Request $request){
        $fi = $request->fecha_ini.' 00:00:00';
        $ff = $request->fecha_fin.' 23:59:59';
        
        $insumos = Insumo::whereBetween('fecha_horaSol',[$fi,$ff])->get();
        
       return view('admin.reportes.reportes_fecha',compact('insumos'));
    }

}