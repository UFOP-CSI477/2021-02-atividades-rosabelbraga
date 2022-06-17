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
            Coletas registradas
        </h1>
    </div>        
    
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Item id</th>
                <th>Entidade id</th>
                <th>Quantidade</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>

            @foreach($coletas as $c)
                <tr>
                    <td>{{ $c->item_id }} </td>
                    <td>{{ $c->entidade_id }}</td>
                    <td>{{ $c->quantidade }}</td>
                    <td>{{ $c->data }}</td>
                    <td><a href="{{route('coleta.show', $c->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $coletas->links() }}

@endsection
