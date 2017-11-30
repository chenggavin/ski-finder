<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">


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
                position: absolute;
                top: 50%; 
                margin-top:-120px;
                left: 51%; 
                margin-left:-200px;
                font-size: 50px;
            }

            .center {
                position: absolute;
                top: 60%; 
                margin-top:-100px;
                left: 50%; 
                margin-left:-200px
            }

            .content {
                text-align: center;
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
    <body>
            <h1 class="title">SlopeCast</h1>
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
