<?php

    $a = true;

    while ($a) {
        $numero = rand(1,10);

        if ($numero === 3) {
            echo "Tres";
            $a = false;
        }

        echo $numero . " ";


    }
?>