<?php
if (isset($_GET["ienviar"]) && !empty($_GET["ienviar"])) {
    if (isset($_GET["figuras"]) && !empty($_GET["figuras"])) {
        $figura = $_GET["figuras"];
        switch ($figura) {
            case 'Circulo':
               echo "<form action='Ejercicio3.1.php' method='get' name='operacion'>
               <label for='radio'>Radio:</label>
               <input type='text' name='iradio'>
               <br><br>
               <input type='submit' value='Enviar' name='ienviar'>
            </form>";
                break;
            case 'Triangulo':
                echo "<form action='Ejercicio3.1.php' method='get' name='operacion'>
               <label for='altura'>Altura:</label>
               <input type='text' name='ialtura'>
               <br><br>
               <label for='base'>Base:</label>
               <input type='text' name='ibase'>
               <br><br>
               <input type='submit' value='Enviar' name='ienviar'>
            </form>";
                break;
            case 'Cuadrado':
                echo "<form action='Ejercicio3.1.php' method='get' name='operacion'>
               <label for='lado'>Lado:</label>
               <input type='text' name='ilado'>
               <br><br>
               <input type='submit' value='Enviar' name='ienviar'>
            </form>";
                break;

            default:
                echo "No has seleccionado ninguna figura geometrica.";
                break;
        }
    }
};
