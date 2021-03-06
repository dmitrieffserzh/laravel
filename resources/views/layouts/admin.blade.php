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
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-inverse navbar-fixed-top" style="
		 background: #191d29;border-color: #272a38;margin-bottom: 0;">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    {{ config('app.name', 'Laravel') }} Admin
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" style="margin:0;">
                    <!-- Authentication Links -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('home') }}">
                                        Вернуться на сайт
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                </ul>
            </div>
    </nav>

    <div class="col-sm-3 col-md-2 navbar-fixed-left" style="
		 background: #191d29;
		 height: 1200px;
		 ">
        <div class="row">
            <br>
            <br>
            <br>
            <a class="" href="{{ route('category.index') }}">
                Категории
            </a>
            <a class="" href="{{ route('pages.index') }}">
                Страницы
            </a>
        </div>

    </div>
    <div class="col-sm-9 col-md-10"style="
		 padding-top: 50px;
		 ">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
