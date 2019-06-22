<?php
/*
    $nome = "gree silva";

    //var_dump($nome, $sobrenome);

    echo strtoupper($nome); //deixar maiúsculo
    echo strtolower($nome);

    echo ucwords($nome);
    echo ucfirst($nome);


    $nome = "greicyelle";
    $nome = str_replace("r", "4", $nome);

    echo $nome;

    */

    $frase = "Hoje estou com fome";

    $q = strpos($frase, "com");
    $texto = substr($frase, 0, $q);
    var_dump($texto);

?>