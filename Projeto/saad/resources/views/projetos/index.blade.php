@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome projeto</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

            @foreach($projetos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome_projeto }} </td>
                    <td>{{ $p->estado }}</td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projetos->links() }}

@endsection