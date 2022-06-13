<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 15px; font-size:16pt;">
            <div class="container-fluid">
              <a class="navbar-brand logo" href="{{route('indice')}}">SDME</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('projetos.index')}}">Equipamento</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('projetos.create')}}">Registro</a>
                  </li>
                  @guest
                    @if (Route::has('login'))
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                    @endif

                    @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                      </li>
                    @endif
                  @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
            @endguest
          </div>
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    @if(session('mensagem'))

        <div class="container">
            <div class="alert alert-success">
                {{ session('mensagem') }}
            </div>
        </div>

    @endif

    @if(session('mensagem-erro'))

        <div class="container">
            <div class="alert alert-danger">
                {{ session('mensagem-erro') }}
            </div>
        </div>

    @endif

    <div class="container">

        @yield('conteudo')
    
    </div>

    <div class="container">
        <footer class="container flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-center" style="font-size: 14pt;">
            Feito com ❤
        </footer>
    </div>
</body>
</html>