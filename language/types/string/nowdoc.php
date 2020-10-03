<?php

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