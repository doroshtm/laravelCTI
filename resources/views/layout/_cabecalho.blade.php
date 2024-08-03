<html>
    <head>
        <title>@yield('titulo')</title>
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            img {
                object-fit:cover;
                width:200px;
                height:200px;
            }
        </style>
    </head>
<body>
    <nav>
        <div class="nav-wrapper deep-orange">
            <a href="#!" class="brand-logo">Cursos</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                <li><a href="#">{{Auth::user()->name}}</a></li>
                <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile">
        <li><a href="/">Home</a></li>
        @if(Auth::guest())
        <li><a href="{{route('login')}}">Login</a></li>
        @else
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
        <li><a href="#">{{Auth::user()->name}}</a></li>
        <li><a href="{{ route('login.sair') }}">Sair</a></li>
        @endif

    </ul>