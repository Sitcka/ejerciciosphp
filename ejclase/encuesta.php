<?php

/**
 * 
 */
echo "<h2>Respuesta de la encuesta:</h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    //Chequeo del radio button
    if (isset($_POST["iprog"]) && !empty($_POST["iprog"])) {
        $lenguaje = $_POST["iprog"];
        echo "<h4>Tu lenguaje preferido es: $lenguaje</h4>";
    }

    //Chequeo del checkbox
    if (isset($_POST["ntrans"]) && !empty($_POST["ntrans"])) {
        $transportes = $_POST["ntrans"];
        echo "<br>Los elementos seleccionados son: " . count($_POST["ntrans"]);
        foreach ($transportes as $transporte) {
            echo "<br>Tu transporte preferido es: $transporte";
        }
    } else {
        echo "<br>No has seleccionado ningun transporte.";
    }

    //Chequeo del select simple
    if (isset($_POST["sfutbol"]) && !empty($_POST["sfutbol"])) {
        $eFutbol = $_POST["sfutbol"];
        echo "<h4>Tu equipo preferido es: $eFutbol</h4>";
    }

    //Select mutliples repasar
}
