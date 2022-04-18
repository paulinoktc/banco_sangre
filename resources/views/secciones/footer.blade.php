<footer>
    <!--Curvatura-->
    <section id="section-curve">
        <div class="curve">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!--Curvatura-->
    <!--Container del contenido del footer con bootstrap-->
    <div class="container-fluid" id="footer"> 

        <!--Fila con el logo-->  
        <div class="row text-center mb-4 pb-4" id="logo-footer">
            <div class="col">
                <img src="{{ URL::asset('img/logo.png') }}" alt="logo">
            </div>
        </div>
        <!--Fila con el logo--> 

     <!--MENU-->
        <!--Fila el menu de opciones para el hospital display flex para hacer visible--> 
        <div class="row text-center mb-4 mt-4 justify-content-lg-center" id="menu-footer-hos">
                <div class="col-12 col-lg-auto">
                    <a href="#">Pacientes</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Pendientes</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Proceso</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Reportes</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Sobre nosotros</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Ayuda</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Privacidad</a>
                </div>
        </div>

        <!--Fila el menu de opciones para el donador display none para hacer invisible--> 
        <div class="row text-center mb-4 mt-4 justify-content-lg-center" id="menu-footer-don">
                <div class="col-12 col-lg-auto">
                    <a href="#">Donar</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Pendientes</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Proceso</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Finalizados</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Sobre nosotros</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Ayuda</a>
                </div>
                <div class="col-12 col-lg-auto">
                    <a href="#">Privacidad</a>
                </div>
        </div>
    <!--MENU-->

        <!--Fila con el copyright--> 
        <div class="row text-center mb-4 mt-4" id="copyrigth">
            <p>
                © 2022. Todos los derechos reservados.
            </p>
        </div>
        <!--Fila con el copyright--> 
    </div>
</footer>
