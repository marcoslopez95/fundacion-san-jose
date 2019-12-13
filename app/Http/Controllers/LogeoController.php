<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Paciente;

class LogeoController extends Controller
{
    //
    public function login(){
        return view('sesion.login');
    }

    public function registro(){
        return view('formularios.Registro.registro');
    }
}
