<?php

//    \n avance de línea (LF o 0x0A (10) en ASCII)
//    \r retorno de carro (CR o 0x0D (13) en ASCII)
//    \t tabulador horizontal (HT o 0x09 (9) en ASCII)
//    \v tabulador vertical (VT o 0x0B (11) en ASCII) (desde PHP 5.2.5)
//    \e escape (ESC o 0x1B (27) en ASCII) (desde PHP 5.4.4)
//    \f avance de página (FF o 0x0C (12) en ASCII) (desde PHP 5.2.5)
//    \\ barra invertida
//    \$ signo de dólar
//    \" comillas dobles

echo "La\ncadena";
echo "\n---------------\n";
echo "La\tcadena";
echo "\n---------------\n";
echo "\\";
echo "\$";
echo "\"";
echo "\n---------------\n";
$cadena = "La cadena";
echo "$cadena";
echo "\n---------------\n";
$cadena_2 = "La
        cadena";
echo "$cadena_2";
echo "\n---------------\n";
$cadena_2 = "La "
        . "cadena";
echo "$cadena_2";
