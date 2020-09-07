<?php

echo 'Digite la edad: ';
$age = fgets(STDIN);

if ($age >= 18) {
    echo 'Es mayor de edad.';
} else {
    echo 'Es menor de edad.';
}