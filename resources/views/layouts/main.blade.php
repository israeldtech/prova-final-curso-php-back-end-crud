<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="shortcut icon" href="/img/logoficina.png" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="/img/logoficina.png" width="40px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/login">Login</a>
                        </li>

                        <li class="nav-item me-auto">
                            <a class="nav-link" href="/register">Cadastrar usuario</a>
                        </li>
                        @endguest




                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/cliente/cadastrar">Cadastrar Cliente</a></li>
                                <li><a class="dropdown-item" href="/cliente/listar">Listar Clientes</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ordem de serviço
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/os/cadastrar">Cadastrar OS</a></li>
                                <li><a class="dropdown-item" href="/os/listar">Listar OS</a></li>
                            </ul>
                        </li>

                        @can('admin')
                        <li class="nav-item me-auto">
                            <a class="nav-link" href="/register">Cadastrar usuario</a>
                        </li>
                        @endcan

                        <form action="/logout" method="post" class="my-auto">
                            @csrf
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item me-auto">
                                    <a class="nav-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </li>

                            </ul>
                        </form>


                        @endauth

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        @auth
        <p>Usuário: {{ auth()->user()->name}}</p>
        @endauth

        @if(session('msg'))
        <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>

    <footer class="container">
        <p>&copy;Projeto Final | Israel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
