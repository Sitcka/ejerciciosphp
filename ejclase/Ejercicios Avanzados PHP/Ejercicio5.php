<?php
if (isset($_GET["ienviar"]) && !empty($_GET["ienviar"])) {
    if (isset($_GET["ilista"]) && !empty($_GET["ilista"])) {
        $programacion = $_GET["ilista"];
        echo "<h4>Los lenguajes de programacion de preferencia son: </h4>";
        echo "<ol>";
        foreach ($programacion as $lenguaje) {
            echo "<li>$lenguaje</li>";
        }
        echo "</ol>";
    } else {
        echo "<h4>No has seleccionado ningun lenguaje de programacion.</h4>";
    }
}
