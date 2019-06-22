<?php

    for ($i = 0; $i <= 100; $i++) {

        if ($i > 60 && $i < 80) continue;
        if ($i === 85) break;
        echo $i . "<br>";
    }


?>