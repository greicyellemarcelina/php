<?php

    $pessoas = array();

    array_push($pessoas, array(
        'nome' => 'Gree',
        'idade' => 20
    ));

    array_push($pessoas, array(
        'nome' => 'Fester',
        'idade' => 1
    ));

    array_push($pessoas, array(
        'nome' => 'Morticia',
        'idade' => 2
    ));

    echo json_encode($pessoas);

?>    