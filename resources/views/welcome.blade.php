<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HadiFashionStore</title>
        <!-- Fonts -->
       
        <!-- Styles -->
        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.5.0/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('jquery/jquery.js') }}" defer></script>
    <script src="{{ asset('popperjs/popper.js') }}" defer></script>
    <script src="{{ asset('bootstrap-4.5.0/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
        <style>
            html, body {
                background-color: #272822;
                color: #000200;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: fixed;
                margin: auto;
                top: 8px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #fff;
                padding: 0 16px;
                font-size: 20px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: -20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref bg-dark full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a class="btn btn-primary btn-sm" role="button" href="{{ route('login') }}" >Masuk</a>
                        @if (Route::has('register'))
                            <a class="btn btn-success btn-sm" role="button" href="{{ route('register') }}">Daftar</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <img src="image/headeruas.png" class="img">
                <center><h5 class="bg-primary" style="color: #fff; padding: 10px; border-radius: 0px;"><marquee style="width: auto">Selamat datang di HadiFashion</h5></marquee></center>
                </div>
            </div>
        </div>
    </body>
</html>
