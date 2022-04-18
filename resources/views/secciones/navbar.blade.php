<nav  id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top pe-4 ps-4">
  <div class="container-fluid d-block"> 
    
    <div class="row">
        <!--Menu collapsante-->
        <div id="nav-menu-hos" class="col-4 col-lg-6 text-lg-start">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-xl-4" aria-current="page" href="#">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-xl-4" aria-current="page" href="#">Pendientes</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link active me-xl-4" aria-current="page" href="#">Proceso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-xl-4" aria-current="page" href="#">Traslados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-xl-4" aria-current="page" href="#">Reportes</a>
                </li>
            </div>
        </div>
        
        <div id="nav-menu-don" class="col-4 col-lg-6 text-lg-start">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Donar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Pendientes</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Proceso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Finalizados</a>
                </li>
            </div>
        </div>
        <!--Menu collapsante-->

        <!--LOGO-->
        <div id="nav-logo" class="col-4 text-start col-lg-2">
            <a class="navbar-brand me-auto" href="#">
                <img src="{{ URL::asset('img/logo.png') }}" alt="logo">
            </a>
        </div>
        <!--LOGO-->

        <!--Menu mi cuenta-->
        <div id="nav-mi-cuenta" class="col-4 dropdown text-end">
            <button class="btn btn-mi-cuenta dropdown-toggle" type="button" id="btn-micuenta" data-bs-toggle="dropdown" aria-expanded="false">
                Mi cuenta
            </button>
            <ul id="menu-mi-cuenta" class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-start" aria-labelledby="btn-micuenta">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Configurar</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar sesion</a></li>
            </ul>
        </div>
        <!--Menu mi cuenta-->
    </div>

  </div>  
</nav>