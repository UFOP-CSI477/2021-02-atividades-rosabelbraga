<?php
    //echo "POST";
    //var_dump($_POST);

    $nameUsuario = $_POST('name');
    $sobrenome = $_POST('sobrenome');
    $enderecoUser = $_POST('endereco');
    $email = $_POST('email');

    if ( $nameUsuario == "admin" && $sobrenome == "admin" && $enderecoUser == "JM" && $email == "admin@php.com") {
        echo "<h3>Olá, $user!</h3>";
    } else {
        echo "<h3>Usuário e/ou senha inválidos!</h3>";
    }

    //echo "<a href=\"index.php\">Voltar</a>";
    echo '<a href="index.php">Voltar</a>';

