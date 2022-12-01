<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función sumatorio() que requiera un parámetro de entada y devuelva el
sumatorio de todos los valores que se le van pasando con cada invocación de la
función.  -->
<?php
include 'funlib.php';
echo "<table border = 1>";
echo "<tr>";
echo "  <td> Pablo  </td>";
echo "  <td> Machado </td>";
echo "</tr>";
echo "<td> " . "Ejercicio" . "</td>";
echo "<td> " . "anexo2-pag71-ej5" . "</td>";
echo "</tr>";
echo "<td> " . "    echo sumatorio(10);
    echo sumatorio(20);
    echo sumatorio(30);
    echo sumatorio(40);
    echo sumatorio(50);" . "</td>";
echo "<td> " . "10
    30
    60
    100
    150" . "</td>";
echo "</tr>";
echo "</table>";
?>
    <?php

    echo sumatorio(10) . "<br>";
    echo sumatorio(20) . "<br>";
    echo sumatorio(30) . "<br>";
    echo sumatorio(40) . "<br>";
    echo sumatorio(50) . "<br>";
    ?>

</body>

</html>