<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    //
    public function ShowTipoAsientos(){
        return view('tipoAsientos');
    }

    public function agregarTablaAsiento()
{
    return view('agregarTipoAsiento');
}


     public function agregarTipoAsiento(Request $request){
        $nvoTipoAsiento = new TipoAsiento();
        $nvoTipoAsiento->idTipoAsiento = $request->idTipoAsiento;
        $nvoTipoAsiento->descripcion = $request->descripcion;
        $nvoTipoAsiento->precio = $request->precio;
        $nvoTipoAsiento->estado = $request->estado;
        $nvoTipoAsiento->save();
        $nvoTipoAsiento = TipoAsiento::all();
        return redirect('/inicio');
     }


     public function eliminarTipoAsiento($id){
$tipoAsiento = TipoAsiento::find();
$tipoAsiento->estado = "I";
$tipoAsiento->save();
return redirect('/inicio');

     }


     public function editarTipoAsiento(){
       $tipoAsiento = TipoAsiento::find();
       


}}
