<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index App</title>
</head>
<body>
    <h1>Aplicacion Web</h1>
    <ul>
        <?php 
            include_once "../App.php";
            $app = new App;
            $app -> fibonacci() ;
        ?>
        <li><a href="">Fibonacci</a></li>
        <li><a href="">Potencias</a></li>
        <li><a href="">Factoriales</a></li>
        <li><a href="">Primos</a></li>
    </ul>
</body>
</html>