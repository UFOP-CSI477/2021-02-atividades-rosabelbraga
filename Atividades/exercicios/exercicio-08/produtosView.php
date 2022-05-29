<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<h1>Produtos</h1>
  <a href="produtosViewinsert.php">Inserir</a>
   <table class="table">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Unidade de medida</th>
    </tr>
   </thead>
   <tbody>

      <?php 
          while($p = $produtos->fetch()) {
            echo "<tr>";
              echo "<td>" .$p["id"] . "</td>\n";
              echo "<td>" .$p["nome"] . "</td>\n";
              echo "<td>" .$p["um"] . "</td>\n";
            echo "</tr>";
          }
      ?>
  </tbody>
</table>     
</body>
</html>