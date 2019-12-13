@extends('principal.estructura')

@section('titulo')
    login -
@endsection

@section('contenido')
<div class="separador"></div>
<div class="row">
<div class="col-sm"></div>
<div class="container col-sm-5">
    <div class="card">
        <div class="card-header titulo-card text-center">
            <h4>Inicio de Sesión para Solicitudes</h4>
        </div>
        <div class="card-body frames-container-application">
            <div class="col-sm"></div>
        <form action="{{route('login')}}" method="post" class="form-group text-center col-sm">
            <input type="text" name="" class="form-control form-group" id="" placeholder="Ingrese usuario">
            <input type="text" name="" class="form-control form-group" id="" placeholder="Ingrese contraseña">
            <input type="button" class="btn btn-primary"value="Ingresar">
        </form>
        </div>
    </div>
</div>
<div class="col-sm"></div>
</div>
@endsection