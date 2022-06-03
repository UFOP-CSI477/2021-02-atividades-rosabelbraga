<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/produtos/globals.css') }}" />
    <title>Home</title>
  </head>
  <body>
    <header>
      <nav class="nav-bar">
        <ul>
          <li class="nav-item">
            <a href="{{route('principal')}}">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route('estados.index')}}">Estados</a>
          </li>
          <li class="nav-item">
            <a href="{{route('cidades.index')}}">Cidades</a>
          </li>

          <!-- Authentication Links -->
          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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

        </ul>
      </nav>
    </header>
    <main>
      <div class="container-home">
        @if(session('mensagem'))

          <div class="alert alert-success">
            {{ session('mensagem') }}
          </div>
          
        @endif
        @yield('conteudo')
      </div>
    </main>
  </body>
</html>