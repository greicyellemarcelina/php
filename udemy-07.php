<?php

    $idade = 15;    

    $idadeCrianca = 12;
    $idadeAdulto = 21;
    $idadeIdoso = 65;

    if ($idade < $idadeCrianca) {
        echo "Crianca";
    } else if ($idade < $idadeAdulto){
        echo "Adolescente";
    } else if ($idade < $idadeIdoso){
        echo "Adulto";
    } else {
        echo "Idoso";
    }
    
    echo "<br>";

    echo ($idade < $idadeAdulto)?"Menor de idade":"Maior de idade";

?>