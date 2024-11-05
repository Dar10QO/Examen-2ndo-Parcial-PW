<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{

public function abrirFormulario(){

    return view('formFrituras');
}

public function registrarFrituras(Request $request)
{
    $validateInfo = $request->validate([
        'nombre'=>'required',
        'sabor'=>'required',
        'peso'=>'required'
    ]);

    session()->flash('exito', 'Se registro Sabor');

    return to_route('welcome');
}



}
