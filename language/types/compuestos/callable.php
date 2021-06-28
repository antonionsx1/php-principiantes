<?php

$myfunction = function($a, $b) {
    return $a + 2 + $b;
};

$b = array_map($myfunction, [1, 2, 3, 4], [1, 2, 3, 4]);

foreach ($b as $c) {
    echo "$c" . "\n";
}