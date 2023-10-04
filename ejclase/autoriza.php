<?php

/**
 * Es una varible superglobal cuando empieza de esta manera $_
 */
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {

    if (isset($_POST["iusuario"]) && !empty($_POST["iusuario"])) {
        $usuario = $_POST["iusuario"];
    }
    if (isset($_POST["ipassword"]) && !empty($_POST["ipassword"])) {
        $password = $_POST["ipassword"];
    }
    if (!empty($usuario) && !empty($password)) {
        if($usuario === "admin" && $password === "456" ){
            echo "<br>Bienvenido administrador.";
        } else{
            echo "<br>BIenvenido humilde usuario que no es administrador.";
        }
    } else {
        echo "<h4>No has introducido el nombre del usuario y/o la contraseña.</h4";
    }
} else {
    echo "<h4>No has iniciado sesion.</h4>";
}
