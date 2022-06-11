@extends('principal')

@section('conteudo')

    <style>
        .cadastroProjeto{
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 50px;
        }
    </style>

    <div class="jumbotron text-center btn-primary" style="padding: 15px; margin-top: 20px; margin-bottom: 70px;">
        <h1>
            Cadastro do projeto 
        </h1>
    </div>

    <div class="cadastroProjeto" style="font-size: 16pt;">
        <form action="{{ route('projetos.store')}}" method="POST" class="row g-3">

            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nome_projeto" class="form-label">Nome projeto</label>
                        <input type="text" class="form-control" id="nome_projeto">    
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email_responsavel" class="form-label">Email cadastrado</label>
                        <input type="email" class="form-control" id="email_responsavel">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="1234 Main St">    
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Apartment, studio, or floor">
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado">
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-2">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep">
            </div>
            
            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" rows="3"></textarea>
            </div>
            <div class="col-md-6">
                <label for="photo" class="form-label">Imagem perfil</label>
                <input class="form-control" type="file" id="photo">
            </div>
            <div class="col-md-6">
                <label for="url" class="form-label">Link externo</label>
                <input type="url" class="form-control" id="url" placeholder="Instagram, site do projeto">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Concordo com os termos de uso
                    </label>
                </div>
            </div>
            
            <div class="text-center buttons" style="padding: 15px; margin-top: 30px; margin-bottom: 15px;">
                <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-danger">
                <a href="{{ url()->previous() }}" class="btn btn-warning">Voltar</a>
            </div>
        </form>
    </div>
    
@endsection