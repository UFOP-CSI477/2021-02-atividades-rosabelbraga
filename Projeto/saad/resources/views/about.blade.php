@extends('principal')

@section('conteudo')

    <div class="jumbotron text-center btn-primary" style="padding: 15px; margin-top: 20px; margin-bottom: 50px;">
        <h1>
            Quem somos 
        </h1>
    </div>

    <div class="textoSobre">
        <p class="text-justify" style="font-size: 16pt;">
            SAAD (Sistema de arrecadação de alimentos para doação) é um facilitador que 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, id pariatur non dolore eius distinctio fuga. Molestiae, placeat soluta. Reiciendis inventore quo quidem facilis molestiae reprehenderit dolores eaque ut asperiores!
            Placeat alias distinctio delectus illo? Cumque nobis hic quae harum doloribus iste nihil, numquam et aut aspernatur consequatur obcaecati dolorem aperiam laudantium repellat, commodi impedit, voluptatibus ab. Eum, aliquid esse.
            Beatae officiis possimus harum in provident blanditiis veritatis perspiciatis ipsam est, ab at officia libero atque tempore temporibus optio amet voluptas impedit magni? Saepe beatae est expedita quisquam quidem dolores.
        </p>
    </div>

    <div class="imagem">
        <img class="center" src="{{ public_path('img/food-about.jpg') }}" alt="alimentos">
    </div>

@endsection