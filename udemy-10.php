<html>
    <head>
        <title>Udemy</title>
    </head>

    <body>
        <form>
            <input type="text" name="nome">
            <input type="date" name="nascimento">
            <input type="submit" name="Ok">
        </form>
    </body>

</html>


<?php

    if(isset($_GET)) {

        foreach ($_GET as $key => $value) {
            echo "Nome do campo: " . $key . "<br>";
            echo "Valor do campo:" . $value . "<br>";
            echo "<br>";
        }
    }
/*

    $meses = array("Janeiro", "Fevereiro", "Março");

    foreach ($meses as $index => $mes) {
        echo "Indice: ".$index."<br>";
        echo "O mes é: ".$mes."<br><br>";
    }


?>
*/
