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
            Registros cadastrados 
        </h1>
    </div>        
    
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>

            @foreach($registros as $r)
                <tr>
                    <td>{{ $r->id }} </td>
                    <td>{{ $r->descricao }}</td>
                    <td>{{ $r->datalimite }}</td>
                    <td><a href="{{route('registros.show', $r->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projetos->links() }}

@endsection