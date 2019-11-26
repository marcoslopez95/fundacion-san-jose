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
            
            <div class="pt-2 bg-light col-sm-12 border border-top-0 border-left-0 border-right-0">
            <span class="pl-5"> Bienvenido, <b>Marcos López</b></span>
            </div>
            {{-- <component v-bind:is="pestaña">
                <ejemplo></ejemplo>
                <Modal></Modal>
            </component> --}}

            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        Active</a> 
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        item</a> 
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        item</a> 
                </li>
            </ul>
            <prueba></prueba>
            Debes rellenar el siguiente formulario

            

            {{-- <component v-bind:is="ejemplo"></component>
            <component v-bind:is="ejemplo"></component> --}}
    </div>
</div><!-- Fin del card body-->
</div><!-- fin del container del card-->
</div> <!-- Fin del card-body-->
</div>

@endsection