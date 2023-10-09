<?php
/*$numero1 = 0;
$numero2 = 0;
if (isset($_GET["ilogin"]) && !empty($_GET["ilogin"])) {
    if (isset($_GET["numero1"]) && !empty($_GET["numero1"])) {
        $numero1 = $_GET["numero1"];
    }
    if (isset($_GET["numero2"]) && !empty($_GET["numero2"])) {
        $numero2 = $_GET["numero2"];
    }
    if ($numero2 <= 0) {
        echo "No se puede realizar la operación. Por favor, introduce otro número diferente como divisor.";
    } else {
        $resultado = $numero1 / $numero2;
        echo "<h4>El resultado de la división es: $resultado</h4>";
    }
};*/
if (isset($_GET["ilogin"]) && !empty($_GET["ilogin"])) {
    try {
        if ($_GET["numero2"] == 0) {
            throw new Exception("<br>No se puede realizar la operación. Por favor, introduce otro número diferente como divisor.");
        }
    } catch (Exception $ex) {
        echo "Se ha producido una excepcion" . $ex->getMessage();
    } /*finally { //Para cerrar recursos ej: ficheros
        echo "<br>Esto siempre se ejecuta.";
    }*/
}
