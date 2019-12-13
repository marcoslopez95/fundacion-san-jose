<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
