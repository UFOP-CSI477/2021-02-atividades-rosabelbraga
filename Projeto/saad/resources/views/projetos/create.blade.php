@extends('principal')

@section('conteudo')

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
                        <input type="text" class="form-control" id="nomeProjeto">    
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputEmail4" class="form-label">Email cadastrado</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">    
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <label for="inputState" class="form-label">Estado</label>
                <input type="text" class="form-control" id="inputState">
            </div>
            <div class="col-md-5">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            
            <div class="col-12">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Imagem perfil</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="col-md-6">
                <label for="linkExterno" class="form-label">Link externo</label>
                <input type="url" class="form-control" id="linkExterno" placeholder="Instagram, site do projeto">
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