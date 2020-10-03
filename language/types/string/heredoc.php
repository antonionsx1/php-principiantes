<?php

$str = <<<EOD
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis heredoc.
EOD;
echo $str;

/* Un ejemplo más complejo con variables. */
$nombre = 'MiNombre';
$foo = 'Foo';
$bar = array('Bar1', 'Bar2', 'Bar3');

echo <<<EOT
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo.
Ahora, estoy escribiendo un poco de {$bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;

//Ejemplo #3 Ejemplo de Heredoc en argumentos
echo var_dump(array(<<<EOD
    foobar!
    EOD
));

// Variables
function foo2() {
    $bar = <<<LABEL
    "Nada a\nquí..."
    LABEL;
    return $bar;
}

echo 'foo2 = ' . foo2();

//Ejemplo #5 Emplear comillas dobles en Heredoc
echo <<<"FOOBAR"
¡Hola Mundo!
FOOBAR;