@extends('principal')

@section('conteudo')

    <style>
        thead{
            font-size: 18pt;
        }
        tbody{
            font-size: 16pt;
        }
    </style>

<!--<a href="{{ route('projetos.create')}}">Cadastrar</a>-->

    <div class="jumbotron text-center btn-primary" style="padding: 15px; margin-top: 20px; margin-bottom: 30px;">
        <h1>
            Entidades registradas
        </h1>
    </div>        
    
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

            @foreach($entidades as $e)
                <tr>
                    <td>{{ $e->id }} </td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->bairro }}</td>
                    <td>{{ $e->cidade }}</td>
                    <td>{{ $e->estado }}</td>
                    <td><a href="{{route('entidade.show', $e->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $entidades->links() }}

@endsection
