<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InsumoController;
use App\Http\Controllers\Admin\LicenciaturaController;
use App\Http\Controllers\Admin\TipoController;
use App\Http\Controllers\Admin\NumeroController;
use App\Http\Controllers\Admin\ChartController;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('tipos', TipoController::class)->names('admin.tipos');
Route::resource('numeros', NumeroController::class)->names('admin.numeros');
Route::resource('licenciaturas', LicenciaturaController::class)->names('admin.licenciaturas');
Route::resource('insumos', InsumoController::class)->names('admin.insumos');
Route::resource('charts',ChartController::class)->names('admin.charts');