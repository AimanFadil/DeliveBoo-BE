<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0 ">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div>
                        <img src=" {{ url('img/logo-deliveboo-removedbg.png') }}" alt="" class="w-logo">

                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ">
                        <li class="nav-item">
                            <a class="nav-link hover-navitem fw-bolder" href="{{ url('/') }}"><i
                                    class="fa-solid fa-house me-1"></i>{{ __('Home') }}</a>

                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto ">
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link colorgreen red-hover fw-bolder {{ Route::currentRouteName() == 'dashboard' ?: '' }}"
                                    href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link colorgreen red-hover fw-bolder {{ Route::currentRouteName() == 'dashboard' ?: '' }}"
                                    href="{{ route('admin.dish.index') }}">{{ __('Piatti') }}</a>

                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link hover-navitem fw-bolder"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link hover-navitem fw-bolder "
                                        href="{{ route('register') }}">{{ __('Register') }}</a>

                                </li>
                            @endif
                        @else
                            @if (!Auth::user()->restaurant()->exists('user_id'))
                                <li class="nav-item">
                                    <a class="btn btn-sm btn-primary mt-1 me-3"
                                        href="{{ url('restaurants/create') }}">{{ __('Create your Restaurant') }}
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle hover-navitem fw-bolder"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    <i class="fa-regular fa-user me-1"></i>
                                    {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu dropdown-menu-right colorgreen" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item colorgreen red-hover"
                                        href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item colorgreen red-hover"
                                        href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                    <a class="dropdown-item colorgreen red-hover" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none colorgreen">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
    </div>
    </nav>
    <div class="container-fluid vh-100">
        <div class="row h-100">

            <main class="col-md-9  col-lg-12 px-md-4 pt-3">
                @yield('content')
            </main>


        </div>
    </div>
</body>

</html>
