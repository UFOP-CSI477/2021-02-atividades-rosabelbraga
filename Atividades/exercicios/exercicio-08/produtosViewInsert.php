<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <form action="produtosControllerInsert.php" method="post" name="formCadastroProduto" id="form-cadastro" onsubmit="submit(event)">
        
        <div class="input-group mb-3">
            <label for="nome" class="input-group-text">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="input-group mb-3">
            <label for="um" class="input-group-text">Unidade de medida:</label>
            <input type="text" name="um" id="um" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Inserir</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>