<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.5.0/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('jquery/jquery.js') }}" defer></script>
    <script src="{{ asset('popperjs/popper.js') }}" defer></script>
    <script src="{{ asset('bootstrap-4.5.0/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- <style>
    html, body {
            background-color: #272822;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
    }
    
    table tr {
            background-color: #4f4f4f;
            color: #fff;
            border: 6px solid #353535;
            padding: 10px;
    }

    table th {
            background-color: #4f4f4f;
            color: #fff;
            border: 6px solid #353535;
            padding: 10px;
        
    }
    table td {
            background-color: #4f4f4f;
            color: #fff;
            border: 6px solid #353535;
            padding: 10px;
        
    }

    nav {
        background-color: #4f4f4f;
    }
    .cen{
        text-align: center;
    }
    
    #app{
        border-radius: 10px;
    }
    }
    </style> -->
    <style type="text/css">
        body
        {
            background: #2A2A2E;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-light">

            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropDown" aria-controls="navbarDropDown" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                        

                            <li>
                                <a class="nav-link" href="{{ url('/category') }}">Kategori</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/post') }}">Post</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/photo') }}">Foto</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/album') }}">Album</a>
                            </li>
                    </div>


                        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                            <ul class="nav navbar-nav ml-auto">
                             <li class="nav-item active">
                                <a class="nav-link disable" href="#" role="button" aria-disabled="true">Login Sebagai: 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>

                            <li>    
                                <a class="nav-link btn-danger text-light btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                            </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                            </ul>
                        @endguest
                   </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="fixed-bottom bg-dark text-light text-center">Copyright © 2020. Muhammad Hadi Senoadji</div>
    </div>
</body>

</html>
