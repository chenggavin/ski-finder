<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SlopeCast</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:700" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .title {
                font-size: 50px;
                text-align: center;
                margin-top:25%;
                color:lightblue;
                font-size:70px;
                font-family: 'Bangers', cursive;
            }

            .center {
                position: absolute;
                top: 60%; 
                margin-top:-100px;
                left: 55%; 
                margin-left:-200px
            }



            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body><div class="animated bungee title">SlopeCast</div>

            
            @if (Route::has('login'))
                <div class=" center links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

        </div>
    </body>
</html>
