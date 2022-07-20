@extends('layouts.app')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="row justify-content-center">
        <div style="width: 30rem;">
            <img class="card-img-top" src="{{ asset('assets/img/escudo.png') }}" alt="Card image cap">
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body"  mt-5 mb-5" style="color: rgb(242, 219, 54); font-size: 30px; text-shadow:0.1em 0.1em 0.3em black;">
                    <br><br>
                    <strong>Gobierno Autónomo Departamental de La Paz</strong>
                    <p> <br>
                    
                        Sistema de Generación de Documentacion <br> Dirección de Transportes y Telecomunicaciones. <br><br>
                        <!--Contenido de presentación login-->
                    </p>
                    <strong><p>Registro de Nuevo Usuario</p></strong>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success" style="color: rgb(235, 229, 229); font-size: 30px; ">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
