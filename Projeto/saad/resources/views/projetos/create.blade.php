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
        <form method="POST" action="{{ route('projetos.store')}}" enctype="multipart/form-data" class="row g-3">

            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nome_projeto" class="form-label">Nome projeto</label>
                        <input type="text" class="form-control" id="nome_projeto" name="nome_projeto" value="{{ old('nome_projeto') }}" placeholder="Nome do projeto">    
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email_responsavel" class="form-label">Email registrado</label>
                        <input type="text" class="form-control" id="email_responsavel" name="email_responsavel" value="{{ old('email_responsavel') }}" placeholder="exemplo@email.com">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('endereco') }}" placeholder="1234 Main St">    
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="{{ old('complemento') }}" placeholder="Apartment, studio, or floor">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado') }}" placeholder="Nome do estado">
                </div>
                <div class="col-5">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade') }}" placeholder="Nome da cidade">
                </div>
                <div class="col-2">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{ old('cep') }}" placeholder="12345-678">
                </div>
            </div>            
            
            <div class="row">
                <div class="col-12">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name= "descricao" value="{{ old('descricao') }}"rows="8" placeholder="Detalhes importantes do projeto"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="photo" class="form-label">Imagem perfil</label>
                    <input class="form-control" type="text" id="photo" name="photo" placeholder="Endereço da imagem">
                </div>

                <div class="col-6">
                    <label for="url" class="form-label">Link externo</label>
                    <input type="url" class="form-control" id="url" name="url" value="{{ old('url') }}" placeholder="Instagram, site do projeto">
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