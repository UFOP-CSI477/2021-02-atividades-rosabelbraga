<?php

    require_once 'conection.php'; 

    // Controller -> Model
    $estados = $connection->query("SELECT * FROM estados");

    //var_dump($estados->fetchAll());

    // View
    require 'estadosView.php';
