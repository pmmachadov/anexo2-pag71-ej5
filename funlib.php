<?php
    function sumatorio($num)
    {
        static $suma = 0;
        $suma += $num;
        return $suma;
    }

    ?>