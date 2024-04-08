<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Deliveboo</title>


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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

                <button class="px-2 py-1 d-block d-md-none btn_add_" type="button" data-bs-toggle="offcanvas"
                    href="#offcanvasExample" role="button" aria-controls="offcanvasExample"
                    aria-label="{{ __('Toggle navigation') }}">
                    <i class="fa-solid fa-bars fa-lg" style="color: #ffffff;"></i></span>
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
                        @if (Auth::check() && Auth::user()->restaurant()->exists())
                            <li class="nav-item">
                                <a class="nav-link hover-navitem fw-bolder {{ Route::currentRouteName() == 'dashboard' ?: '' }}"
                                    href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link hover-navitem fw-bolder {{ Route::currentRouteName() == 'dashboard' ?: '' }}"
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
                                    href="{{ route('login') }}">{{ __('Accedi') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link hover-navitem fw-bolder "
                                        href="{{ route('register') }}">{{ __('Registrati') }}</a>

                                </li>
                            @endif
                        @else
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

    {{-- offcanvas on in mobile  --}}
    <div class="offcanvas offcanvas-start w-50" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="colorgreen offcanvas-title fs-4 text-center green_color fw-semibold my-2"
                id="offcanvasExampleLabel">
                Menu
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body container">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <div class="text-center">
                        <ul class="navbar-nav me-auto ">
                            <li class="nav-item my-1">
                                <div>
                                    <a class="nav-link hover-navitem-offcanca fw-bolder" href="{{ url('/') }}"><i
                                            class="fa-solid fa-house me-1"></i>{{ __('Home') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <ul class="navbar-nav me-auto ">
                            @if (Auth::check() && Auth::user()->restaurant()->exists())
                                <li class="nav-item my-1">
                                    <a class="nav-link hover-navitem-offcanca fw-bolder {{ Route::currentRouteName() == 'dashboard' ?: '' }}"
                                        href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>

                                </li>
                                <li class="nav-item  my-1">
                                    <a class="nav-link hover-navitem-offcanca fw-bolder {{ Route::currentRouteName() == 'dashboard' ?: '' }}"
                                        href="{{ route('admin.dish.index') }}">{{ __('Piatti') }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <div class="text-center">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item my-1">
                                    <a class="nav-link hover-navitem-offcanca fw-bolder "
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item my-1">
                                        <a class="nav-link hover-navitem-offcanca fw-bolder  "
                                            href="{{ route('register') }}">{{ __('Register') }}</a>

                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown my-1">
                                    <a id="navbarDropdown"
                                        class=" nav-link dropdown-toggle hover-navitem-offcanca fw-bolder" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        <i class="fa-regular fa-user me-1"></i>
                                        {{ Auth::user()->name }}

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right colorgreen"
                                        aria-labelledby="navbarDropdown">
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
        </div>
    </div>
    </nav>
    <div class="container-fluid vh-100">
        <div class="row h-100">

            <main class=" p-0 m-0 ">
                @yield('content')
            </main>

        </div>
    </div>
</body>

</html>
