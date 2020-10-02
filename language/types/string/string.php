<?php

//Heredoc 

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

//Nowdoc
// 
//Ejemplo #6 Ejemplo de entrecomillado de string de Nowdoc
echo <<<'EOT'
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;

//Análisis de variables

//Sintaxis simple

$jugo = "manzana";
echo "Él tomó algo de jugo de $jugo.";
// Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
echo "Él tomó algo de jugo hecho de ${jugo}s.";

$jugos = array("manzana", "naranja", "koolaid1" => "púrpura", "negro" => array("negrita"));
echo "Él tomó algo de jugo de $jugos[0]." . PHP_EOL;
echo "Él tomó algo de jugo de $jugos[1]." . PHP_EOL;
echo "Él tomó algo de jugo $jugos[koolaid1]." . PHP_EOL;

//Sintaxis compleja (llaves)

$genial = 'fantástico';
// No funciona, muestra: Esto es { fantástico}
echo "Esto es {$genial}";
echo "Esto funciona: {$jugos['koolaid1']}";
echo "Él tomó algo de jugo {$jugos["negro"][0]}." . PHP_EOL;
?>

<br><label>Si TRUE es una cadena, imprimirla:</label>
<?php
if (is_string(TRUE)) {
    echo "Cadena: " . "foo";
}