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
    function sumatorio($num)
    {
        static $suma = 0;
        $suma += $num;
        return $suma;
    }
    echo sumatorio(10) . "<br>";
    echo sumatorio(20) . "<br>";
    echo sumatorio(30) . "<br>";
    echo sumatorio(40) . "<br>";
    echo sumatorio(50) . "<br>";
    ?>

</body>

</html>