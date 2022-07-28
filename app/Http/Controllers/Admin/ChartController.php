<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insumo;
use App\Models\Licenciatura;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Computo;
class ChartController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.charts.index');
    }

    public function index (){
        $insu = Insumo::select (DB::raw("COUNT(*) as count"))
        ->whereYear("created_at", date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        

        $months = Insumo::select (DB::raw("Month(created_at) as month"))
        ->whereYear("created_at", date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $month)
        {
            $datas[$month-1] = $insu[$index];
        }
        

        $insu2 = Insumo::select (DB::raw("COUNT(*) as count"))
        ->whereBetween('licenciatura_id',([0,3]))
        ->groupBy(DB::raw("licenciatura_id"))
        ->pluck('count');

        $insu3 = Insumo::select (DB::raw("COUNT(*) as count"))
        ->whereBetween('tipo_id',([0,10]))
        ->groupBy(DB::raw("tipo_id"))
        ->pluck('count');

        $insu4 = Insumo::select (DB::raw("COUNT(*) as count"))
        ->whereBetween('profesor',([0,10]))
        ->groupBy(DB::raw("profesor"))
        ->pluck('count');

        
        return view('admin.charts.index')->with('datas',$datas)
        ->with('insu2',$insu2)
        ->with('insu3',$insu3)
        ->with('insu4',$insu4);
       
        
        
        

    }
    public function indexcom(){

        $comp = Computo::select (DB::raw("COUNT(*) as count"))
        ->whereYear("created_at", date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        

        $months = Computo::select (DB::raw("Month(created_at) as month"))
        ->whereYear("created_at", date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $month)
        {
            $datas[$month-1] = $comp[$index];
        }
        $comp2 = Computo::select (DB::raw("COUNT(*) as count"))
        ->whereBetween('servicio_id',([0,10]))
        ->groupBy(DB::raw("servicio_id"))
        ->pluck('count');
        
        $comp3 = Computo::select (DB::raw("COUNT(*) as count"))
        ->whereBetween('licenciatura_id',([0,10]))
        ->groupBy(DB::raw("licenciatura_id"))
        ->pluck('count');

        $comp4 = Computo::select (DB::raw("COUNT(*) as count"))
        ->whereBetween('usuar_id',([0,10]))
        ->groupBy(DB::raw("usuar_id"))
        ->pluck('count');
        $months1 = Computo::select (DB::raw("Month(created_at) as month"))
        ->whereYear("created_at", date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        
        $datas1 = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months1 as $index => $month)
        {
            $datas1[$month-1] = $comp4[$index];
        }
        return view('admin.charts_computo.indexcom')
        ->with('datas',$datas)
        ->with('comp2',$comp2)
        ->with('comp3',$comp3)
        
        ->with('datas1',$datas1);
    }
 
   
    


}