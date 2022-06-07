@extends('principal')

@section('conteudo')

<!--<a href="{{ route('projetos.create')}}">Cadastrar</a>-->

<table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome projeto</th>
                <th>Estado</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($projetos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome_projeto }} </td>
                    <td>{{ $p->estado }}</td>
                    <td><a href="{{route('projetos.show', $p->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projetos->links() }}

@endsection