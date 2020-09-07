<?php

function foo() {
    function bar() {
        return "Función interna.\n";
    }
    return "Función de ejemplo.\n";
}

//bar no existo hasta que se llame a foo()
echo foo();
echo bar();