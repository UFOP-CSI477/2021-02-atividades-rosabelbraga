@extends('principal')

@section('conteudo')

<h1>Dados do Projeto</h1>

<ul>
    <li>Id: {{ $projeto->id }}</li>
    <li>Nome: {{ $projeto->nome_projeto }}</li>
    <li>Sigla: {{ $projeto->descricao }}</li>
    <li>Criação: {{ $projeto->created_at }}</li>
    <li>Última alteração: {{ $projeto->updated_at }}</li>
</ul>

<a href="{{ route('projetos.edit', $projeto->id) }}" class="btn btn-primary">Editar</a>

<a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>

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