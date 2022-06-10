@extends('welcome');

@section('authorization')
<!--SignIn y Sign Up-->
        <section id="main">
            <div class="container mt-5 mb-5" id="contenedor-main">
                <div class="row" id="fila-main">
                    <div class="col-12 col-lg-5 offset-lg-1 px-0 text-center d-grid" id="signin">
                            <img src="{{ URL::asset('img/logoLight.png') }}" alt="logo">
                            <h1>¡Bienvenido!</h1>
                            <p>Para poder acceder a tu cuenta porfavor inicia sesión.</p>
                            <a type="button" class="btn btn-signin" href="{{route('login.create')}}">Sign in</a>
                    </div>
                    <div class="col-12 col-lg-5 px-0 text-center d-grid" id="signup">
                        <img src="{{ URL::asset('img/logoDark.png') }}" alt="logo">
                        <h1>Crea una cuenta</h1>
                        <p>Puedes crear una cuenta para registrarte como hospital o como donador.</p>
                        <button type="button" class="btn btn-signup" data-bs-toggle="modal" data-bs-target="#modalsignup">Sign up</button>
                    </div>
                </div>
            </div>
        </section>

    <!--MODAL-->
    <div class="modal fade" id="modalsignup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <img class="ms-auto" src="{{ URL::asset('img/logo.png') }}" alt="logo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <a href="{{route('register')}}"><i class="fa-solid fa-hospital"></i></a>
                            <h3>Hospital</h3>
                        </div>
                        <div class="col text-center">
                            <a href="#"><i class="fa-solid fa-hand-holding-heart"></i></i></a>
                            <h3>Donador</h3>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
@endsection