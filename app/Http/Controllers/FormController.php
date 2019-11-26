<?php

namespace App\Http\Controllers;

use App\Model\Discapacidad;
use Illuminate\Http\Request;

use App\Model\Representante;
use Carbon\Carbon;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function disfuncion()
    {
        //
        return view('formularios.Registro.disfuncion');
    }

    public function guardar_condicion(Request $request, Discapacidad $discapacidad)
    {
        //
        dd($discapacidad->all());
        // return view('formularios.Registro.disfuncion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar_user(Request $request){

        $validar = $request ->validate([
            'cedula'=>'max:8',
            'nombre1'=>'max:15',
            'nombre2'=>'max:15',
            'apellido1'=>'max:15',
            'apellido2'=>'max:15',
        ]);

        $fecha_nacimiento = $request->input('fecha-nacimiento');
        $edad = Carbon::parse($fecha_nacimiento)->age;
        
        $representante = new Representante();
        $representante->repr_ced = $request->input('cedula');
        $representante->repr_no1 = $request->input('nombre1');
        $representante->repr_no2 = $request->input('nombre2');
        $representante->repr_ap1 = $request->input('apellido1');
        $representante->repr_ap2 = $request->input('apellido2');
        $representante->repr_sex = $request->input('gen');
        $representante->repr_fna = $fecha_nacimiento;
        $representante->repr_eda = $edad;
        
        $representante->repr_tel = $request->input('tel');
        $representante->repr_pss = "hola";
        $representante->repr_cse = "pghzz";
        $representante->save();
        return redirect()->route('inicio_sesion');
        
    
        // return redirect()->route('trainers.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar_discapacidad()
    {
        //
        $discapacidad = Discapacidad::all();
        return view('principal.usuario.Discapacidad',compact('discapacidad'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar_cond_pac(Request $request, Discapacidad $discapacidad)
    {
        //
        return $request->all();
        // $trainer->fill($request->except('avatar'));
        // if ($request->hasFile('avatar')) {
        //     $file = $request->file('avatar');
        //     $nombre_archi = time().$file->getClientOriginalName();
        //     $trainer->avatar = $nombre_archi;
        //     $file->move(public_path().'/images/trainers/',$nombre_archi);
        // }
        // $nombre_entrenador=$request->input('nombre');
        // $slug2 = strtr($nombre_entrenador,' ','-');
        // $trainer->slug = $slug2 . "-trainer";
        // $trainer->save();
        // return redirect()->route('trainers.show',[$trainer])->with('status','Entrenador actualizado correctamente');
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
