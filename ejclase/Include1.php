<?php
    include "Include2.php";//Si hay un error continua la ejecuccion
    //Require si hay error se para el programa
    //Include_once: Inclutye el fichero una sola vez.
    //Requiere_once: Incluye el fichero una sola vez.
    //Los ficheros que se van a incluir se tiene que cerrar la etiqueta de php. 
    echo "<h1>Soy el primer fichero</h1>";
    echo "El valor de var es: $var";
    echo "<br>Otra cadena.";