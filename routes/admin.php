<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InsumoController;
use App\Http\Controllers\Admin\LicenciaturaController;
use App\Http\Controllers\Admin\TipoController;
use App\Http\Controllers\Admin\NumeroController;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('tipos', TipoController::class)->names('admin.tipos');
Route::resource('numeros', NumeroController::class)->names('admin.numeros');
Route::resource('licencituras', LicenciaturaController::class)->names('admin.licenciaturas');
Route::resource('insumos', InsumoController::class)->names('admin.insumos');