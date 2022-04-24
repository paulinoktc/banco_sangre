@extends('secciones.master')
@section('title', 'hospitales')

@section('contenido')
    <div class="contenido">
        <div class="card" style="width: 30rem;">
            <div class="card-body">


                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name">Nombre</label>

                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                            autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email">Correo</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password">Contraseña</label>

                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation">Confirma Contraseña</label>

                        <input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required />
                    </div>

                    <div class="flex text-center justify-end mt-4">

                        <button class="btn btn-primary">
                            Registrarse
                        </button>
                        <br>

                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            Ya estas registrado?
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
