@extends('principal.estructura')

@section('titulo')
    Registro -
@endsection

@section('contenido')
<div class="separador"></div>
<div class="row">
<div class="col-sm"></div>
<div class="container-fluid col-sm-11">
    <div class="card">
        <div class="card-header titulo-card text-center">
            <h4>Discapacidades y </h4>
        </div>
        <div class="card-body">

        <form class="form-group" action="{{route('guardar-u')}}" method="post">
            
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
         <h4> Datos Personales</h4>
        </div>
    
        <div class="col-sm-6 container row">
                <div class="col-sm">
                        <input type="text" name="cedula" placeholder="cedula" class="form-control" id="">
                    {!! Form::label('', 'Seleccionar DNI', ['class'=>'']) !!}
                    {!! Form::file('dni', ['class'=>'btn btn-info form-control']) !!}
                <br>
                    {!! Form::label('', 'Seleccionar Foto', ['class'=>'']) !!}
                    {!! Form::file('foto-user', ['class'=>'btn btn-warning form-control']) !!}
                    
                </div>  
               
        </div>
    <div class="col-sm-6 container row mx-auto border border-bottom-0 border-top-0 border-right-0">
            <label for=""> <input name="nombre1" type="text" class="form-control" placeholder="Primer Nombre"></label>
            <label for=""> <input type="text" name="nombre2" class="form-control" placeholder="Segundo Nombre"></label>
            <label for=""><input type="text" name="apellido1" class="form-control" placeholder=" Primer Apellido"></label>
            <label for=""><input type="text" name="apellido2" class="form-control" placeholder=" segundo Apellido"></label>
        <div class="container row col-sm-12">
            <div class="col-sm-4 my-auto">
                <label class="radio-inline">Sexo:
                    <input type="radio" name="gen">F
                    <input class="" type="radio" name="gen">M
                </label>
            </div> 
            <div class="col-sm">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="fecha-nacimiento" id="" class="form-control">
            </div>
        </div>
        
        
    </div>
    
    <div class="container row" style="padding-top:15px;">
        
        <div class="col-sm-12 border border-bottom-0 border-left-0 border-right-0">
            <h4>Contacto</h4>
        </div>
        
            <div class="col-sm-6">
                <label for="">Telefono</label>
                <input name="tel" type="tel" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Correo Electrónico</label>
                <input name="correo" type="email" class="form-control">
            </div>
        
        
            <div class="col-sm-6">
                <label for="">Ubicación GPS</label>
                <textarea name="gps" id="" class="form-control"cols="30" rows="10"></textarea>
            </div>
            <div class="col-sm-6">
                <label for="">Sector</label>
                <input name="sector"type="email" class="form-control">
            </div>
    </div>
    
    <div class="row mx-auto" style="padding-top:15px">
        <div class="col-sm text-center">
            <input type="button" value="Acceder" class="form-control btn btn-primary boton-formulario">
        </div>
    </div>
</form>
</div><!-- Fin del Row-->
</div><!-- fin del container del cardbody-->
        </div> <!-- Fin del card-body-->
    </div>
</div>
<div class="col-sm"></div>
</div>
</div>
@endsection