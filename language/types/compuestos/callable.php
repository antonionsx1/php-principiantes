<?php

$myfunction = function($a) {
    return $a + 2;
};
$b = array_map($myfunction, [1, 2, 3, 4]);

foreach ($b as $c) {
    echo "$c" . "\n";
}