@extends('principal')

@section('conteudo')

    <style>
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            width: 55%; 

            margin-top: 50px;
        }

        .center2{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            width: 35%; 

            margin-top: 50px;
        }

        . card {
            margin-top: 50px;
            margin-left: 150px;
            margin-right: 150px;
            margin-bottom: 50px;
            text-align: justify;
        }
    </style>

    <div class="jumbotron text-center btn-primary" style="padding: 15px; margin-top: 20px; margin-bottom: 50px;">
        <h1>
            Dados do {{ $projeto->nome_projeto }}
        </h1>
    </div>

    <div class="card mb-3">
        <img src="{{ $projeto->photo }}" class="card-img-top center2" alt="imagem do projeto">
        <div class="card-body" style="font-size: 14pt;">
            <h5 class="card-title">{{ $projeto->nome_projeto }}</h5>
            <p class="card-text">{{ $projeto->cidade }}, {{ $projeto->estado }}</p>
            <p class="card-text">{{ $projeto->descricao }}</p>
            <p class="card-text">Rede social: {{ $projeto->url }}</p>
            <p class="card-text"><small class="text-muted">Criado em  {{ $projeto->created_at }} ; Última alteração em  {{ $projeto->updated_at }}</small></p>
        </div>
    </div>
    

    <div class="text-center buttons" style="padding: 15px; margin-top: 30px; margin-bottom: 15px;">
        <a href="{{ route('projetos.edit', $projeto->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{ url()->previous() }}" class="btn btn-warning">Voltar</a>
        
        <form action="{{ route('projetos.destroy', $projeto->id) }}" method="post" onsubmit="return confirmaExclusao()">

            @csrf
            @method('DELETE')

            <input type="submit" value="Excluir" class="btn btn-danger">
        </form>
    </div>
    <div class="container">
        <div class="col-12" style="font-size: 16pt;padding: 30px;">
            <label for="comentario" class="form-label">Comentário</label>
            <textarea class="form-control" id="comentario" rows="3"></textarea>
        </div>
    </div>    

    <script>
        function confirmaExclusao() {
            return window.confirm("Confirma a exclusão do Projeto?");
        }
    </script>

@endsection