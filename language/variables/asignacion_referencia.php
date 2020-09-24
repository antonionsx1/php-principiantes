<?php

$x = 'equis';
$_x = &$x;
$_x = 'x';
echo $x . "\n";
echo $_x;

