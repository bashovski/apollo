<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id="apollo_nav" class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: #fff;">
                    <img src="/img/apollo_logo.png" width="42" height="42" alt="">
                    <span id="apollo_nav_brand_span">APOLLO</span>
                </a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                     href="#" style="color: #fff;" ver="">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: #4AD7D1;padding-right: 30px;">
                                <img id="apollo_nav_main_btn_pin" src="/svg/apollo_account.svg" height="18" width="18" alt="">
                                <span>My Account</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">
                                <img id="apollo_nav_main_btn_pin" src="/svg/apollo_properties.svg" height="18" width="18" alt="">
                                <span>My Properties</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" id="apollo_nav_main_btn">
                                <img id="apollo_nav_main_btn_pin" src="/svg/apollo_pin.svg" height="18" width="18" alt="">
                                <span>Place a Property</span></a>
                        </li>
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
