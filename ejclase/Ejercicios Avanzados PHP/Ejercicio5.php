
<?php
if (isset($POST["ienviar"]) && !empty($POST["ienviar"])) {
    if (isset($POST["ilista"]) && !empty($POST["ilista"])) {
        $programacion = $POST["ilista"];
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
