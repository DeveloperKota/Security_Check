<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MB checker') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <style>
        .row justify-content-center.register {
            border-bottom: 1px bold black;
            text-decoration: none;
        }
        
        .bg-white {
            background-color: #d71618 !important;
        }
        .dropdown-toggle::after {
            display: none;
        }
        .navbar-brand {
            color: white !important;
        }
        .nav-link {
            color: white !important;
        }
        .card-header {
            background-color: #d71618 !important;
            color: white;
        }
        .btn-primary {
            background-color: #d71618 !important;
            color: white;
            border-color: #fff;
        }
        .btn-link {
            color: #d71618;
        }
        .form-group {
            display: flex;
        }
        .label {
            margin-left: 5%;
        }
        .card-body a {
            background-color: #d71618 !important;
            color: white !important;
            border-color: #fff;
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            line-height: 1.6;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .card-body a:hover {
            text-decoration: none;
        }
             body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            h1 {
               background-color: #d71618; 
               padding-top: 10px;
               padding-bottom: 10px;
               padding-left:30px;
               height: 50px;
               margin: 0;
            }

            .flex-center position-ref full-height h1{
                background-color:   #d71618; 
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
                position: absolute;
                right: 30px;
                top: 21px;
            }

            .top-right a{
                color: #fff;
            }
            
            .content {
                text-align: center;
            }
            
            .content {
                
            }

            .content img {
                margin-bottom: 100px;
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 0px;
                background-color: #d71618;
            }
            
            .security {
                width:300px;
                height:40px;
                line-height:40px;
            }
            .security a{
                display:block;
                height:100%;
                height:100%;
                text-decoration: none;
                background-color: #d71618;
                text-align:center;
                color:#fff;
                font-size:20px;
                font-weight:bold;
                border-radius:50px;
                box-shadow:0px 0px 0px 4px #fff ;
                transition: all 0.5s ease;
            }
            
            .security a:hover {
                background-color: #d71618;
            }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MBchecker') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/logout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    ログアウト 
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
