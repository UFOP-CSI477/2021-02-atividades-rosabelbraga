@extends('principal')

@section('conteudo')

    <div class="jumbotron text-center btn-primary" style="padding: 15px; margin-top: 20px; margin-bottom: 70px;">
        <h1>
            Dados do {{ $projeto->nome_projeto }}
        </h1>
    </div>
    
    <div class="text-justify" style="font-size: 16pt; background-color: rgb(240, 227, 227)">
        <ul>
            <li><strong>Nome</strong>: {{ $projeto->nome_projeto }}</li>
            <li><strong>Cidade</strong>: {{ $projeto->cidade }}</li>
            <li><strong>Estado</strong>: {{ $projeto->estado }}</li>
            <li><strong>Descrição</strong>: {{ $projeto->descricao }}</li>
            <li><strong>Rede social</strong>: {{ $projeto->url }}</li>
            <li><strong>Criação</strong>: {{ $projeto->created_at }}</li>
            <li><strong>Última alteração</strong>: {{ $projeto->updated_at }}</li>
        </ul>
    </div>

    <div class="text-center buttons" style="padding: 15px; margin-top: 30px; margin-bottom: 15px;">
        <a href="{{ route('projetos.edit', $projeto->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{ url()->previous() }}" class="btn btn-warning">Voltar</a>        
    </div>


    <form action="{{ route('projetos.destroy', $projeto->id) }}" method="post" onsubmit="return confirmaExclusao()">

        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir" class="btn btn-danger">

    </form>

    <script>
        function confirmaExclusao() {
            return window.confirm("Confirma a exclusão do Estado?");
        }
    </script>

@endsection