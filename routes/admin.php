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


Route::get('',[HomeController::class,'index'])->name('admin.home');
Route::get('reportes/reporte_dia',[ReporteController::class,'reporte_dia'])->name('admin.reportes.reporte_dia');
Route::get('reportes/reportes_fecha',[ReporteController::class,'reportes_fecha'])->name('admin.reportes.reportes_fecha');
Route::post('reportes/reportes_res',[ReporteController::class,'reportes_res'])->name('admin.reportes.reportes_res');
//rutas para exportar a pdf

Route::get('reportes/pdf_dia',[InsumoController::class,'pdf_dia'])->name('admin.insumos.pdf_dia');
Route::get('reportes/pdf_fecha',[InsumoController::class,'pdf_fecha'])->name('admin.insumos.pdf_fecha');


Route::resource('tipos', TipoController::class)->names('admin.tipos');
Route::resource('numeros', NumeroController::class)->names('admin.numeros');
Route::resource('licenciaturas', LicenciaturaController::class)->names('admin.licenciaturas');
Route::resource('insumos', InsumoController::class)->names('admin.insumos');
Route::resource('charts',ChartController::class)->names('admin.charts');
Route::resource('reportes',ReporteController::class)->names('admin.reportes');