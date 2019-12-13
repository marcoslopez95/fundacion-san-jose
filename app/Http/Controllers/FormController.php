<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar_user(Request $request){
        $datos_validados = $request->validate([
            'cedula'=>'required|max:8',
            'dni'=>'required|image',
            'foto-user'=>'required|image',
            'nombre1'=>'required|max:15',
            'nombre2'=>'max:15',
            'apellido1'=>'required|max:15',
            'apellido2'=>'max:15',
            'gen'=>'required',
            'fecha-nacimiento'=>'required',
            'tel'=>'required|max:11',
            'correo'=>'required|email',
            'gsp'=>'required',
            'sector'=>'required',
            'rep'=>'required'

        ]);
         
        // if ($request->hasFile('avatar')) {
        //     $file = $request->file('avatar');
        //     $nombre_archi = time().$file->getClientOriginalName();
        //     $file->move(public_path().'/images/trainers/',$nombre_archi);
        // }
        
        
        $paciente = new Paciente();
        $paciente->paci_ced = $request->input("ced");
        $paciente->paci_no1 = $request->input('nombre1');
        $paciente->save();
        return view('sesion.disfuncion');
        // return redirect()->route('trainers.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
