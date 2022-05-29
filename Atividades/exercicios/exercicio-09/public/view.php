<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos e estados</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
</head>
<body>
  <div class="container">
    <div class="element">
      <h1>Estados</h1>
       <table class="table">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sigla</th>
          </tr>
         </thead>
         <tbody>

            <?php 
                foreach($estados as $e) {
                  echo "<tr>";
                    echo "<td>" .$e->getId() . "</td>\n";
                    echo "<td>" .$e->getNome() . "</td>\n";
                    echo "<td>" .$e->getSigla() . "</td>\n";
                  echo "</tr>";
                }
            ?>
        </tbody>
       </table> 
    </div>
    <div class="element">
      <h1>Produtos</h1>
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
                foreach($produtos as $p) {
                  echo "<tr>";
                    echo "<td>" .$p->getId() . "</td>\n";
                    echo "<td>" .$p->getNome() . "</td>\n";
                    echo "<td>" .$p->getUm() . "</td>\n";
                  echo "</tr>";
                }
            ?>
        </tbody>
       </table> 
    </div>
  </div> 
</body>
</html>