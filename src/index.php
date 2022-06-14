<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database list</title>
</head>
<body>
    <?php

    use ITEC\PRESENCIAL\DAW\BD\bd;
    include_once "../vendor/autoload.php";


    $bd = new bd();
    $resultado = $bd->Select("SHOW DATABASES;");
    print_r($resultado);

    $bd = new bd();
    $resultado = $bd->Select("Select * From libro;");
    print_r($resultado);

    ?>

</body>
</html>

