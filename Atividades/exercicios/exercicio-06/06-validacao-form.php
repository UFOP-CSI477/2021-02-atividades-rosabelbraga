<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">        
        <link rel="stylesheet" href="/Atividades/exercicios/exercicio-06/forms.css">
        <link rel="stylesheet" href="/Atividades/exercicios/exercicio-06/style.css">
        
        <title>Intodução ao JS</title>

    </head>

    <body>

        <header>
            
        </header>

        <main>
            <div class="container">
                <h1 class="h1 mt-4 text-primary text-center">Dados pessoais</h1>
                <form action="/Atividades/exercicios/exercicio-06/validar.php" class="form" name="frmDados" method="POST">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="name">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="name">
                        </div>
    
                        <div class="col-md-6">
                            <label for="name">Sobrenome:</label>
                            <input type="text" name="sobrenome" class="form-control" id="sobrenome">
                        </div>
                    </div>
            
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="name">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" id="endereco">
                        </div>
    
                        <div class="col-md-6">
                            <label for="telefone">E-mail:</label>
                            <input type="text" name="email" class="form-control" id="email>
                        </div>
                    </div>
            
                    <div class="row mt-4">
                        <input type="button" value="Salvar" class="btn btn-dark" onClick="cadastrar();">
                    </div>        
            
                    <div>
                        <hr class="mt-4">
                        <div class="content">
                        <div id="nome"></div>
                        <div id="sobrenome"></div>
                        <div id="endereco"></div>
                        <div id="email"></div>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <div id="scripts">
            <script src="06-validacao-form.js"></script>
        </div>
    </body>
</html>