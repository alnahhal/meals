<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
    .admin-view {
        margin: auto;
        width: 50%;
    }

    .admin-view a:link {
        font-size: 20px;
        text-decoration: none;
        font-weight: bold;
    }

    .admin-title {
        text-align: center;
        margin:20px;
        font-weight: bold;
        font-family:georgia, arial, helvetica;
        display: inline-block;
        padding:12px;
        border-radius: 10px;
        color:white;
    }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <span style="color:black;font-size:2.2rem;font-weight: bold;letter-spacing: 2px;">Meals</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    
                    &nbsp;
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle btn-md" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Vendors
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('vendors.create') }}">Add New Vendor</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('vendors.index') }}">Show All Vendors</a>
                            </li>
                        </ul>
                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark btn-md dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Meals
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('meals.create') }}">Add New Meal</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('meals.index') }}">Show All Meals</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

    
    <p class="admin-title fs-5 bg-dark">Welcome to Admin Dashboard</p>
    
    <div class="admin-view">
    <div class="row g-4">
    <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card h-100">
                <img src="/web_images/user.jpg" class="card-img-top" alt="User Logo">
                <div class="card-body text-center">
                <a href="{{ route('vendors.create') }}#">Add Vendor</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card h-100">
                <img src="/web_images/meal.jpg"  class="card-img-top" alt="Meal Logo">
                <div class="card-body text-center">
                    <a href="{{ route('meals.create') }}">Add Meal</a>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="{{ asset('js/all.js') }}"></script>
</body>

</html>