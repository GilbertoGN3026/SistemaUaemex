<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insumo;
use Carbon\Carbon;
use App\Models\Computo;
use Barryvdh\DomPDF\Facade\PDF;
class ReporteController extends Controller

{
    public function __construct()
    {
        $this->middleware('can:admin.reportes.reporte_dia');
    }
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
     //reporte de todos los insumos
     public function reporte_allinsumos()
     { 
        $insumos=Insumo::all();
         return view('admin.reportes.reporte_allinsumos',compact('insumos'));
 
     }
     //reporte por mes
    public function reporte_mes()
    { 
        $insumos=Insumo::whereYear('fecha_horaSol', now()->year)
        ->whereMonth('fecha_horaSol','>=' , '01')
	    ->whereMonth('fecha_horaSol','<=', '06')
	    ->get();
        
        return view('admin.reportes.reporte_mes',compact('insumos'));

    }
    public function reporte_mes2()
    { 
        $insumos=Insumo::whereYear('fecha_horaSol', now()->year)
        ->whereMonth('fecha_horaSol','>=' , '06')
	    ->whereMonth('fecha_horaSol','<=', '12')
	    ->get();
        
        return view('admin.reportes.reporte_mes2',compact('insumos'));

    }
    //reporte por mes
    public function meses()
    { 
        
        
        return view('admin.reportes.meses');

    }
    // exportacion a pdf de insumos
    public function pdf_allinsumos()
    {
        $insumos=Insumo::all();
        $pdf = PDF::loadView('admin.reportes.pdf_allinsumos',['insumos'=>$insumos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportes.pdf_allinsumos',compact('insumos'));

    }
    public function pdf_dia()
    {
        $insumos = Insumo::whereDate('fecha_horaSol',Carbon::today())->get();
        $pdf = PDF::loadView('admin.reportes.pdf_dia',['insumos'=>$insumos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportes.pdf_dia',compact('insumos'));

    }
   public function pdf_fecha()
    { 
        $insumos=Insumo::whereYear('created_at', '2022')
        ->whereMonth('created_at','>=' , '01')
        ->whereMonth('created_at','<=', '07')
        ->get();;
        $pdf = PDF::loadView('admin.reportes.pdf_fecha',['insumos'=>$insumos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportes.pdf_fecha',compact('insumos'));

    }
    public function pdf_mes()
    { 
        $insumos=Insumo::whereYear('fecha_horaSol', now()->year)
        ->whereMonth('fecha_horaSol','>=' , '01')
	    ->whereMonth('fecha_horaSol','<=', '06')
	    ->get();
        $pdf = PDF::loadView('admin.reportes.pdf_mes',['insumos'=>$insumos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportes.pdf_mes',compact('insumos'));

    }
    public function pdf_mes2()
    { 
        $insumos=Insumo::whereYear('fecha_horaSol', now()->year)
        ->whereMonth('fecha_horaSol','>=' , '06')
	    ->whereMonth('fecha_horaSol','<=', '12')
	    ->get();
        $pdf = PDF::loadView('admin.reportes.pdf_mes',['insumos'=>$insumos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportes.pdf_mes',compact('insumos'));

    }



   //REPORTES DE EQUIPOS DE COMPUTO IE
    public function reporteC_dia(){
        $computos = Computo::whereDate('created_at',Carbon::today())->get();
  
        
        return view('admin.reportesC.reporteC_dia',compact('computos'));
    }
    public function reportesC_fecha(){
        $computos = Computo::whereDate('created_at',Carbon::today())->get();
        
        
        return view('admin.reportesC.reportesC_fecha',compact('computos'));
    }

   
    public function reportesC_res(Request $request){
        $fi = $request->fecha_ini.' 00:00:00';
        $ff = $request->fecha_fin.' 23:59:59';
        
        $computos = Computo::whereBetween('created_at',[$fi,$ff])->get();
        
       return view('admin.reportesC.reportesC_fecha',compact('computos'));
    }
    //reporte de todos los EQ
    public function reportesC_allcomputos()
    { 
       $computos=Computo::all();
        return view('admin.reportesC.reportesC_allcomputos',compact('computos'));

    }
    //reporte por meses
    public function C_mes()
    { 
        
        
        return view('admin.reportesC.C_mes');

    }
    //reporte por mes
    public function reporteC_mes()
    { 
        $computos=Computo::whereYear('created_at', now()->year)
        ->whereMonth('created_at','>=' , '01')
	    ->whereMonth('created_at','<=', '06')
	    ->get();
        
        return view('admin.reportesC.reporteC_mes',compact('computos'));

    }
    public function reporteC_mes2()
    { 
        $computos=Computo::whereYear('created_at', now()->year)
        ->whereMonth('created_at','>=' , '06')
	    ->whereMonth('created_at','<=', '12')
	    ->get();
        
        return view('admin.reportesC.reporteC_mes2',compact('computos'));

    }


    //exportar a pdf equipos de computo
    public function pdfC_dia()
    {
        $computos = Computo::whereDate('created_at',Carbon::today())->get();
        $pdf = PDF::loadView('admin.reportesC.pdfC_dia',['computos'=>$computos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportesC.pdfC_dia',compact('computos'));

    }
   public function pdfC_fecha()
    { 
        $computos=Computo::whereYear('created_at', '2022')
        ->whereMonth('created_at','>=' , '01')
        ->whereMonth('created_at','<=', '07')
        ->get();;
        $pdf = PDF::loadView('admin.reportesC.pdfC_fecha',['computos'=>$computos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportesC.pdfC_fecha',compact('computos'));

    }

     // exportacion a pdf de insumos
     public function pdfC_allcomputos()
     {
         $computos=Computo::all();
         $pdf = PDF::loadView('admin.reportesC.pdfC_allcomputos',['computos'=>$computos])->setPaper('a3', 'landscape');;
         return $pdf->stream();
         return view('admin.reportesC.pdfC_allcomputos',compact('computos'));
 
     }
     public function pdfC_mes()
    { 
        $computos=Computo::whereYear('created_at', now()->year)
        ->whereMonth('created_at','>=' , '01')
	    ->whereMonth('created_at','<=', '06')
	    ->get();
        $pdf = PDF::loadView('admin.reportesC.pdfC_mes',['computos'=>$computos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportesC.pdfC_mes',compact('computos'));

    }
    public function pdfC_mes2()
    { 
        $computos=Computo::whereYear('created_at', now()->year)
        ->whereMonth('created_at','>=' , '06')
	    ->whereMonth('created_at','<=', '12')
	    ->get();
        $pdf = PDF::loadView('admin.reportesC.pdfC_mes',['computos'=>$computos])->setPaper('a3', 'landscape');;
        return $pdf->stream();
        return view('admin.reportesC.pdfC_mes',compact('computos'));

    }
    
   

}