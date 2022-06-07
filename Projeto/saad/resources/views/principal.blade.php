<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Projetos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="../css/geral.css">
    <link rel="stylesheet" href="../css/listaProjeto.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand logo" href="{{route('principal')}}">Brand</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('principal')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('projetos.index')}}">Projetos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('projetos.create')}}">Cadastro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobre.html">Sobre</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                  <a class="btn btn-secondary" href="login.html" role="button">Login</a>
                </form>
              </div>
            </div>
          </nav>
    </header>

    <!--
    <main>
        <h1>
            Projetos cadastrados
        </h1>

        <div class="filtroBusca">
            <label for="exampleDataList" class="form-label">Filtro</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            <option value="Projeto X">
            <option value="Projeto Y">
            </datalist>
        </div>
        
        <div class="listaProjetos">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/src/img/projeto1.jpg" class="img-fluid rounded-start" alt="imagem do perfil">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Projeto 1</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/src/img/projeto2.jpg" class="img-fluid rounded-start" alt="imagem do perfil">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Projeto 2</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/src/img/projeto1.jpg" class="img-fluid rounded-start" alt="imagem do perfil">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Projeto 1</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/src/img/projeto2.jpg" class="img-fluid rounded-start" alt="imagem do perfil">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Projeto 2</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
    -->

    @if(session('mensagem'))

        <div class="alert alert-">
            <success>
                {{ session('mensagem')}}
            </success>
        </div>

    @endif

    @yield('conteudo')

    <footer>
        Feito com ❤
    </footer>

    <div id="scripts">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>