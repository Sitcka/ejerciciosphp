<?php
if (isset($_GET["ilogin"]) && !empty($_GET["ilogin"])) {
    if (isset($_GET["numero1"]) && !empty($_GET["numero2"])) {
        $numero = $_GET["numero1"];
    }
    if (isset($_GET["numero2"]) && !empty($_GET["numero2"])) {
        $numero2 = $_GET["numero2"];
        $suma = $numero + $numero2;
        echo "<h4>La respuesta es: $suma.</h4>";
    } else {
        echo "<h4>No has introducido algun numero.</h4>";
    }
};
