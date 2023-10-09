<?php
if(isset($_GET["ienviar"]) && !empty($_GET["ienviar"])){
    if(isset($_GET["icomidas"]) && !empty($_GET["icomidas"])){
        $comida = $_GET["icomidas"];
        echo "<h4>Tu comida favorita o la que seleccionaste fue: $comida</h4>";
    }
}
