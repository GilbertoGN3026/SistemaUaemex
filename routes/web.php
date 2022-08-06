<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComputoController;
use App\Http\Controllers\Admin\VinsumoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('vinsumo',[VinsumoController::class,'vinsumo'])->name('vinsumo');*/

Route::get('',[ComputoController::class,'index'])->name('computos');
Route::get('computos/index2',[ComputoController::class,'index2'])->name('computos.index2');


Route::resource('computos',ComputoController::class)->names('computos');

/*Route::get('/', function () {
    return view('vinsumo');
});*/
/*Route::get('/', function () {
    return view('admin.computos.index');
});*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});