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
                    <form method="POST" action="{{route('login') }}">
                        @csrf
                        <div class="form-row ms-4 me-4">
                            <div class="form-group col-6 col-md-12 mb-4">
                                <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-6 col-md-12">
                                <input id="password" class="block mt-1 w-full form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <button class="ml-3">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

@endsection

