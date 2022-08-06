<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InsumoController;
use App\Http\Controllers\Admin\LicenciaturaController;
use App\Http\Controllers\Admin\TipoController;
use App\Http\Controllers\Admin\NumeroController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ReporteController;
use App\Http\Controllers\Admin\ComputoController;


Route::get('',[HomeController::class,'index'])->name('admin.home');

//rutas para reportes de insumos
Route::get('reportes/reporte_dia',[ReporteController::class,'reporte_dia'])->name('admin.reportes.reporte_dia');
Route::get('reportes/reportes_fecha',[ReporteController::class,'reportes_fecha'])->name('admin.reportes.reportes_fecha');
Route::post('reportes/reportes_res',[ReporteController::class,'reportes_res'])->name('admin.reportes.reportes_res');
// reporte por mes de insumos
Route::get('reportes/meses',[ReporteController::class,'meses'])->name('admin.reportes.meses');
Route::get('reportes/reporte_mes',[ReporteController::class,'reporte_mes'])->name('admin.reportes.reporte_mes');
Route::get('reportes/reporte_mes2',[ReporteController::class,'reporte_mes2'])->name('admin.reportes.reporte_mes2');

// reporte all insumos
Route::get('reportes/reporte_allinsumos',[ReporteController::class,'reporte_allinsumos'])->name('admin.reportes.reporte_allinsumos');


//rutas para reportes de equipos de computo
Route::get('reportes/reporteC_dia',[ReporteController::class,'reporteC_dia'])->name('admin.reportesC.reporteC_dia');
Route::get('reportes/reportesC_fecha',[ReporteController::class,'reportesC_fecha'])->name('admin.reportesC.reportesC_fecha');
Route::post('reportes/reportesC_res',[ReporteController::class,'reportesC_res'])->name('admin.reportesC.reportesC_res');
Route::get('reportes/reportesC_allcomputos',[ReporteController::class,'reportesC_allcomputos'])->name('admin.reportesC.reportesC_allcomputos');
Route::get('reportes/C_mes',[ReporteController::class,'C_mes'])->name('admin.reportesC.C_mes');
Route::get('reportes/reporteC_mes',[ReporteController::class,'reporteC_mes'])->name('admin.reportesC.reporteC_mes');
Route::get('reportes/reporteC_mes2',[ReporteController::class,'reporteC_mes2'])->name('admin.reportesC.reporteC_mes2');




//graficas de equipos de computo
Route::get('charts/indexcom',[ChartController::class,'indexcom'])->name('admin.charts_computo.indexcom');

//rutas para exportar a pdf insumos
Route::get('reportes/pdf_dia',[ReporteController::class,'pdf_dia'])->name('admin.reportes.pdf_dia');
Route::get('reportes/pdf_fecha',[ReporteController::class,'pdf_fecha'])->name('admin.reportes.pdf_fecha');
Route::get('reportes/pdf_mes',[ReporteController::class,'pdf_mes'])->name('admin.reportes.pdf_mes');
Route::get('reportes/pdf_allinsumos',[ReporteController::class,'pdf_allinsumos'])->name('admin.reportes.pdf_allinsumos');
Route::get('reportes/pdf_mes2',[ReporteController::class,'pdf_mes2'])->name('admin.reportes.pdf_mes2');


//rutas para exportar a pdf equipos de computo

Route::get('reportes/pdfC_dia',[ReporteController::class,'pdfC_dia'])->name('admin.reportesC.pdfC_dia');
Route::get('reportes/pdfC_fecha',[ReporteController::class,'pdfC_fecha'])->name('admin.reportesC.pdfC_fecha');
Route::get('reportes/pdfC_allcomputos',[ReporteController::class,'pdfC_allcomputos'])->name('admin.reportesC.pdfC_allcomputos');
Route::get('reportes/pdfC_mes',[ReporteController::class,'pdfC_mes'])->name('admin.reportesC.pdfC_mes');
Route::get('reportes/pdfC_mes2',[ReporteController::class,'pdfC_mes2'])->name('admin.reportesC.pdfC_mes2');


 
Route::resource('tipos', TipoController::class)->names('admin.tipos');
Route::resource('numeros', NumeroController::class)->names('admin.numeros');
Route::resource('licenciaturas', LicenciaturaController::class)->names('admin.licenciaturas');
Route::resource('insumos', InsumoController::class)->names('admin.insumos');
Route::resource('charts',ChartController::class)->names('admin.charts');
Route::resource('reportes',ReporteController::class)->names('admin.reportes');