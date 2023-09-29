<?php

echo "<h1>CHECK VAR: isset, empty, is_null</h1>";
$numero = 9;
$cero = 0;
$vacia = "";
$varnula = NULL;

echo "<h3>Numero(entero)</h3>";
echo "Establecida? " . var_dump(isset($numero));
echo "Vacia? " . var_dump(empty($numero));
echo "Es nula?" . var_dump(is_null($numero));

echo "<h3>Cero</h3>";
echo "Establecida? " . var_dump(isset($cero));
echo "<br>Vacia? " . var_dump(empty($cero));
echo "<br>Es nula?" . var_dump(is_null($cero));

echo "<h3>Vacia</h3>";
echo "Establecida? <br>" . var_dump(isset($vacia));
echo "Vacia? <br>" . var_dump(empty($vacia));
echo "Es nula?<br>" . var_dump(is_null($vacia));

echo "<h3>Nula</h3>";
echo "Establecida? <br>" . var_dump(isset($varnula));
echo "Vacia? <br>" . var_dump(empty($varnula));
echo "Es nula?<br>" . var_dump(is_null($varnula));

echo "<h3>Variable inexistente</h3>";
echo "Establecida? <br>" . var_dump(isset($varca));
echo "Vacia? <br>" . var_dump(empty($varca));
echo "Es nula?<br>" . var_dump(is_null($varca));