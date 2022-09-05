<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
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
                border:1px solid #000;
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
        <h1>MB checker</h1>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="https://www.media-b.com/wp-content/uploads/2021/06/icon_mb-logo.png" alt="メディアブレインロゴ" width="320" height="280">
                <div class="title m-b-md">
                </div>

                <div class="security">
                    <a href="{{ url('/home') }}">セキュリティチェックはこちら</a>    
                </div>
            </div>
        </div>
    </body>
</html>
