<?php

function functionName(){
    static $foo = "local";
    $foo = "s";
    echo $foo;
}

functionName();