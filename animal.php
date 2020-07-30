<?php
require "ape.php";
require "frog.php";

class animal {
    public $name;
    public $legs = 2;
    public $cold_blooded = false;

    public function __construct($name) {
        $this->name = $name;
    }
    public function get_name() {
        $this->name;
    }
    public function get_legs() {
        $this->legs;
    }
    public function get_cold_blooded() {
        $this->cold_blooded;
    }
}

?>

