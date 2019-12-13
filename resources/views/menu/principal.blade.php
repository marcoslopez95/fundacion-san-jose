<div class="container-fluid">
    <nav class="navbar navbar-expand-md col-12 menu navbar-dark fixed-top">
    <!-- Brand -->
<a class="navbar-brand col-1" href="{{route('hom')}}">Inicio</a>
    
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="navbar-collapse collapse show" id="collapsibleNavbar" style="">
        <ul class="navbar-nav col-sm my-auto">
            <li class="nav-item">
                <a class="nav-link col-sm-2" href="#">Actividades</a>
            </li>
            <li class="nav-item col-sm-3">
                <a class="nav-link active" href="{{route('nosotros')}}">¿Quienes Somos?</a>
            </li>
            
        
<ul class="navbar-nav mr-auto ml-auto"> </ul>


<!--Barra de búsqueda -->
        <ul class="navbar-nav ml-auto
           " style="">
            <form class="form-inline" action="/action_page.php" style="
">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>
        </ul>
</div>
</nav>
</div>