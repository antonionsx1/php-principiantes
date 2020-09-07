<?php

echo 'Digite la edad: ';
$age = fgets(STDIN);

switch ($age) {
    case $age <= 3:
        echo 'Primera infancia.';
        break;
    case $age > 3 && $age <= 6;
        echo 'Niñes temprana.';
        break;
    default:
    case $age > 6 && $age <= 11;
        echo 'Niñes intermedia.';
        break;
    case $age > 11 && $age <= 17;
        echo 'Adolescencia.';
        break;
    case $age > 17 && $age <= 35;
        echo 'Juventud.';
        break;
    case $age > 35 && $age <= 50;
        echo 'Madurez.';
        break;
    case $age > 50 && $age <= 65;
        echo 'Adultes madura.';
        break;
    case $age > 65;
        echo 'Tercera edad.';
        break;
    default:
        break;
}
