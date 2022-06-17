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
            Itens registrados
        </h1>
    </div>        
    
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Descricao</th>
            </tr>
        </thead>
        <tbody>

            @foreach($itens as $i)
                <tr>
                    <td>{{ $i->id }} </td>
                    <td>{{ $i->descricao }}</td>
                    <td><a href="{{route('item.show', $i->id)}}">Exibir</a></td>          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $itens->links() }}

@endsection
