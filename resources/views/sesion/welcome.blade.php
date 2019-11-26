@extends('principal.estructura')


@section('titulo')
    Discapacidades y/o Condiciones -
@endsection

@section('contenido')
<div class="separador"></div>
<div class="row container-fluid">

<div class="mx-auto col-sm-11">
    <div class="card">
        <div class="card-header titulo-card text-center">
            <h4>Discapacidades y/o Condiciones </h4>
        </div>
        <div class="card-body pt-0 pl-0 pr-0">
        <div class="container">
            
            
            <span class="title"> Bienvenido, <b>Marcos López</b></span>
            
           <ul>
             <li> 
                <a href="{{route('registro-d')}}">discapacidad</a>
             </li>
             <li> 
                    <a href="">condicion</a>
             </li>

           </ul>
    </div>
</div><!-- Fin del card body-->
</div><!-- fin del container del card-->
</div> <!-- Fin del card-body-->
</div>

@endsection