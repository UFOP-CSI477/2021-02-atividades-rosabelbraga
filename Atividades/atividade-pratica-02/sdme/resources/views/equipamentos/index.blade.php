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
            Equipamentos cadastrados 
        </h1>
    </div>        
    
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>

            @foreach($equipamentos as $e)
                <tr>
                    <td>{{ $e->id }} </td>
                    <td>{{ $e->nome }}</td>
                    <td><a href="{{route('equipamentos.show', $e->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projetos->links() }}

@endsection