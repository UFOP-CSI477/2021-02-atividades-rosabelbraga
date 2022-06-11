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
            Projetos cadastrados 
        </h1>
    </div>        
    
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome projeto</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($projetos as $p)
                <tr>
                    <td>{{ $p->nome_projeto }} </td>
                    <td>{{ $p->estado }}</td>
                    <td>{{ $p->cidade }}</td>
                    <td><a href="{{route('projetos.show', $p->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projetos->links() }}

@endsection