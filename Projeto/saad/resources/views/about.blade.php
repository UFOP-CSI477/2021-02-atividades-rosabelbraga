@extends('principal')

@section('conteudo')

    <style>
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            width: 55%; 

            margin-top: 50px;
        }

        .textoSobre > p{
            margin-top: 50px;
            margin-left: 150px;
            margin-right: 150px;
            margin-bottom: 50px;

            text-align: justify;
        }
    </style>

    <div class="jumbotron text-center btn-primary" style="padding: 15px; margin-top: 20px; margin-bottom: 50px;">
        <h1>
            Quem somos 
        </h1>
    </div>

    <div class="textoSobre">
        <p class="text-justify" style="font-size: 16pt;">
            O Sistema de arrecadação de alimentos para doação (SAAD) tem como objetivo ser uma ponte entre projetos independentes que arrecadam mantimentos e distribuem para a população em situação de vulnerabilidade social, com pessoas ou organizações que desejam contribuir com os mesmos.
        </p>
        <p class="text-justify" style="font-size: 16pt;">    
            Nesse sistema é possível passar as informações necessárias para divulgar o projeto, especificando o local atendido, contato de mercados locais que têm parceria, e divulgação das redes sociais; a fim de divulgar o trabalho já desenvolvido para conhecimento do público. Facilitando, dessa forma, a arrecadação para continuidade dos projetos.
        </p>            
    </div>

    <div class="imagem">
        <img class="center" src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="alimentos">
    </div>

@endsection