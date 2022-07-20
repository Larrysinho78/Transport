 @extends('layouts.app')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="row justify-content-center">
        <div style="width: 30rem;">
            <img class="card-img-top" src="{{ asset('assets/img/escudo.png') }}" alt="Card image cap">
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <div class="card-body mt-5 mb-5" style="color: rgb(242, 219, 54); font-size: 30px; text-shadow:0.1em 0.1em 0.3em black;">
                   {{--  <div>
                        <h1 class="logo-name"><img width="200" src="{{ asset('assets/img/logo.png') }}"></h1><br>
                    </div> --}}
                    <br><br>
                    <strong>Gobierno Autónomo Departamental de La Paz</strong>
                    <p> <br>
                    
                        Sistema de Generación de Documentacion <br> Dirección de Transportes y Telecomunicaciones. <br><br>
                        <!--Contenido de presentación login-->
                    </p>
                    <strong><p>Inicie Sesión</p></strong>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0" >
                            <div class="col-md-8 offset-md-4" >
                                <button type="submit" class="btn btn-success" style="color: rgb(235, 229, 229); font-size: 30px; ">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: rgb(102, 48, 98s); font-size: 30px; " href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="card-footer">
                    <p class="m-t"> <small>Todos los derechos reservados - GADLP &copy; 2022</small> </p>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
