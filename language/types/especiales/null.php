<?php

echo gettype($foo);

if (is_null($foo)) {
    echo 'Es nulo.';
}

$foo = "Valor de foo";

function functionName() {
    echo gettype($foo);
}
functionName();

unset($foo);
echo gettype($foo);

$arr = array(1 => "uno", 4 => "cuatro");
echo "\n";
print_r($arr);

unset($arr[4]);
print_r($arr);
