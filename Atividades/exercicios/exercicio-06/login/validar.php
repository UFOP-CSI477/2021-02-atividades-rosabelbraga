<?php
    //echo "POST";
    //var_dump($_POST);

    $user = $_POST('usuario');
    $password = $_POST('senha');

    if ( $user == "admin" && $password == "123456"){
        echo "<h3>Olá, $user!</h3>";
    } else {
        echo "<h3>Usuário e/ou senha inválidos!</h3>";
    }

    //echo "<a href=\"index.php\">Voltar</a>";
    echo '<a href="index.php">Voltar</a>';

