<?php

    $json = '[{"nome": "Gree","idade": 20},{"nome": "Fester","idade": 1},{"nome": "Morticia","idade": 2}]';
    $data = json_decode($json, true);

    var_dump($data);



?>