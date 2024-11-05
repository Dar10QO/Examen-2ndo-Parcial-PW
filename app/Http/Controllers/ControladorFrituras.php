<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{

public function abrirFormulario(){

    return view('formFrituras');
}

#Funcion Para validar

public function registrarFrituras(Request $request)
{
    $validateInfo = $request->validate([
        'nombre'=>'required',
        'sabor'=>'required',
        'peso'=>'required'
    ]);

    $sabor = $request->input('nombre');

    session()->flash('exito', 'Se registro Sabor: '.$sabor);

    return to_route('welcome');

}



}
