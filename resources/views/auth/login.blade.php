@extends('welcome')

@section('authorization')
    <main id="main">
        <div class="container mt-5 text-center">
            <div class="row">
                <div class="column">
                    <img src="{{ URL::asset('img/logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="row mb-0">
                <div class="column">
                    <p id="title">Iniciar sesión</p>
                </div>
            </div>
            <div class="row mt-0">
                <div class="column">
                    <p id="subtitle">Inicia sesion con tu correo y tu contraseña</p>
                </div>
            </div>
            <div id="formulario" class="row">
                <div class="col pt-2">
                    <form>
                    <div class="form-row ms-4 me-4">
                        <div class="form-group col-6 col-md-12 mb-4">
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                        </div>
                        <div class="form-group col-6 col-md-12">
                        <label for="inputPassword2" class="visually-hidden">Password</label>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                    </div>
                    <!--
                    <div id="forgot-password" class="row mt-4">
                        <div class="col">
                            <input type="checkbox" name="" id="">
                            <p>Recuerdame</p>
                        </div>
                        <div class="col">
                            <a href=""><p>Olvide mi contraseña</p></a>
                        </div>
                    </div>
                    -->
                    <div class="form-row ms-4 me-4 mt-4">
                        <div class="col-12">
                        <button type="button" class="btn btn-coffirm btn-block">Enviar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

@endsection
