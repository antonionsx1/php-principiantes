<?php

$obj = (object) array('1' => 'foo', '2' => 'foo');
var_dump(isset($obj->{'2'})); // muestra 'bool(false)'
var_dump(key($obj)); // muestra 'int(1)'

class Carro {

    public $modelo;
    public $version;
    public $precio;

    function __construct($modelo, $version) {
        $this->modelo = $modelo;
        $this->version = $version;
    }

    public function get_modelo() {
        return $this->modelo;
    }

    public function get_version() {
        return $this->version;
    }

    public function get_precio() {
        return $this->precio;
    }

    public function set_modelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function set_version($version) {
        $this->version = $version;
        return $this;
    }

    public function set_precio($precio) {
        $this->precio = $precio;
        return $this;
    }

}

$vw = new Carro("2000", "Equipada");
echo $vw->get_version();
