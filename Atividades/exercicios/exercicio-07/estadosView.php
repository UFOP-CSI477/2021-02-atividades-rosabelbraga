<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h1 class="h1 mt-4 text-primary text-center">Lista de estados</h1> 
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome do estado</th>
                <th>Sigla</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($e = $estados->fetch()){
                    echo "<tr>";
                        echo "<td>" .$e["id"] . "</td>\n";
                        echo "<td>" .$e["nome"] . "</td>\n";
                        echo "<td>" .$e["sigla"] . "</td>\n";
                    echo "</tr>";    
                }
            ?>
        </tbody>
    </table>
</body>
</html>