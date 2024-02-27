<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('inicio');
});

Route::get('/tipoAsientos',[TipoAsientoController::class, 'ShowTipoAsientos'])->name('tipoasiento.show');
Route::get('/agregarAsientos',[TipoAsientoController::class, 'agregarTablaAsiento'])->name('tipoasientoagregar.show');
Route::post('/agregarTipoAsiento,',[TipoAsientoController::class,'agregarTipoAsiento'])->name('tipoasientoagregar.crear');
Route::put('/editarAsiento',[TipoAsientoController::class,'editarTipoAsiento'])->name('editarAsiento.editar');

Route::get('/vuelos' ,[VuelosController::class,'mostrarVuelos'])->name('vuelos.show');
Route::get('/vuelosEditar',[VuelosController::class,'editarVuelos'])->name('vuelos.editar');



