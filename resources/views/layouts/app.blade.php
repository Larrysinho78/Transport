<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
		body{
			background-color: #BA1920;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg stroke='%237F1F22' stroke-width='63' stroke-opacity='0.14' %3E%3Ccircle fill='%23BA1920' cx='0' cy='0' r='1800'/%3E%3Ccircle fill='%23bb2620' cx='0' cy='0' r='1700'/%3E%3Ccircle fill='%23bd2f20' cx='0' cy='0' r='1600'/%3E%3Ccircle fill='%23be3721' cx='0' cy='0' r='1500'/%3E%3Ccircle fill='%23bf3d21' cx='0' cy='0' r='1400'/%3E%3Ccircle fill='%23c14321' cx='0' cy='0' r='1300'/%3E%3Ccircle fill='%23c24921' cx='0' cy='0' r='1200'/%3E%3Ccircle fill='%23c34e21' cx='0' cy='0' r='1100'/%3E%3Ccircle fill='%23c55321' cx='0' cy='0' r='1000'/%3E%3Ccircle fill='%23c65822' cx='0' cy='0' r='900'/%3E%3Ccircle fill='%23c75c22' cx='0' cy='0' r='800'/%3E%3Ccircle fill='%23c96022' cx='0' cy='0' r='700'/%3E%3Ccircle fill='%23ca6422' cx='0' cy='0' r='600'/%3E%3Ccircle fill='%23cb6822' cx='0' cy='0' r='500'/%3E%3Ccircle fill='%23cc6c22' cx='0' cy='0' r='400'/%3E%3Ccircle fill='%23ce6f23' cx='0' cy='0' r='300'/%3E%3Ccircle fill='%23cf7323' cx='0' cy='0' r='200'/%3E%3Ccircle fill='%23D07623' cx='0' cy='0' r='100'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
		}
        .card{
        	box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'GADLP') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Nuevo</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container-fluid">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
        
                @if(isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>

        
    </div>

    
</body>
</html>
