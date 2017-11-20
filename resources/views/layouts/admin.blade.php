<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <style>

    </style>
</head>
<body>
<div id="app">
    <header class="navbar is-transparent">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <span class="title is-size-4-desktop is-size-5-touch">Laravel - Bulma</span>
                </a>

                <button class="button navbar-burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <div class="navbar-menu" id="navMenu">
                <div class="navbar-start">
                    {{--content--}}
                </div>
                <div class="navbar-end">
                    @guest
                        <a href="{{ route('login') }}" class="navbar-item">Login</a>
                        <a href="{{ route('register') }}" class="navbar-item">Register</a>
                    @else
                        <p class="navbar-item">{{ Auth::user()->email }}</p>
                        <div class="navbar-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>{{--container ends--}}
    </header>{{--header and navbar end--}}

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

</div>{{--#app ends--}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
