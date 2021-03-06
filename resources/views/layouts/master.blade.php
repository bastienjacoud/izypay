<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <div id="main">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header col-xs-8 col-offset-xs-2">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('afficheTransaction') }}" data-toggle="collapse" data-target=".navbar-collapse.in">Affichage</a></li>
                        <li><a href="{{ route('listerBonus') }}"data-toggle="collapse" data-target=".navbar-collapse.in">Bonus</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</div>

<footer class = "footer panel-footer">
    Réalisé par Bastien Jacoud
    <div id="date" class="col-xs-1 col-xs-offset-11">
        {{ date('d/M/Y') }}
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
