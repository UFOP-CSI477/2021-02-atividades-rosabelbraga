@extends('principal')

@section('conteudo')

<main>
        <h1>
            Cadastro projeto
        </h1>

        <div class="cadastroProjeto">
            <form action="{{ route('projetos.store')}}" method="POST" class="row g-3">

                @csrf

                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Endereço</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Complemento</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-5">
                    <label for="inputState" class="form-label">Estado</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
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
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

@endsection