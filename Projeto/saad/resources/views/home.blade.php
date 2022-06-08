@extends('principal')

@section('conteudo')

    <h1>
        Sistema de arrecadação de alimentos para doação
    </h1>

    <div class="imagem">
        <img class="center" src="/src/img/food-index.jpg" alt="alimentos">
    </div>

    <div class="cards-index">        
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/resources/img/projeto1.jpg" class="img-fluid rounded-start" alt="imagem do perfil">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 1</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/resources/img/projeto2.jpg" class="img-fluid rounded-start" alt="imagem do perfil">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 2</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection