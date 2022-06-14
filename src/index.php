<?php
namespace ITEC\PRESENCIAL\DAW\BD;

$bd = new bd();
$resultado = $bd->Select("SHOW DATABASES;");
print_r($resultado);
?>