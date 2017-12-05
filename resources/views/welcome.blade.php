<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>SlopeCast</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One|News+Cycle|Russo+One" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <div id="gradientplaceholder">.</div>
            <div class="animated bungee welcomeTitle">SlopeCast</div> 
            @if (Route::has('login'))
                <div class="center links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            <div class="welcomeDiv">
                <h3>Supported Resorts</h3>
                <ul class="welcomeUl">
                    @foreach ($resorts as $resort)
                    <li class="welcomeLi"><span>{{ $resort->name }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
