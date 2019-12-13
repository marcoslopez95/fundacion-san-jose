@extends('principal.estructura')

@section('titulo')
    
@endsection

@section('contenido')
    @include('principal.carrusel')
<div class="separador"></div>
    
    <div class="container-fluid">
            <div class="row col-sm-12 col">
                <!-- Tarjeta izquierda-->
               @include('principal.tarjeta-izquierda')
                
                <!-- Tarjeta centro-->
                @include('principal.tarjeta-central')
                
                <!-- Tarjeta derecha-->
                @include('principal.tarjeta-derecha')
            </div>
        </div>
@endsection