<div class="col-sm">
    <div class="card sombra completar-alto">
        <div class="card-header titulo-card text-center">
            <h4 class="card-title">
                Solicitudes
            </h4>
        </div>
        <div class="card-body cuerpo-tarjeta">
            <div class=" text-center"><p class="card-text texto-card ">¿Quieres solicitar nuestra ayuda?</p>
                <p class="importante">¡Adelante!</p><br>
            </div>
            
            <form class="form-inline" action="{{route('registro')}}" method="get">        
                <a class="text-left form-group">Cedula</a><br>
                
                
                <div class="form-row">
                    <select class="form-control m-auto" name="" id="">
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Ejemplo: 24150936" name="" id="">
                </div>
                
                <div class="mx-auto" style="padding-bottom:5px;">
                    <br>
                    <input type="submit" value="Registrarse" class="btn btn-primary boton-formulario">
                </div>
                
            </form>
        
        <div class="card-footer cuerpo-tarjeta">
                <div class=" text-center">
                    <a class="card-text texto-card ">¿Ya te registraste?</a>   
                    <a class="card-link" href="{{route('login')}}">¡Ingresa aquí!</a><br>
                </div>
            </div>
        </div>
    </div>
</div>