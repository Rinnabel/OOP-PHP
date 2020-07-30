<?php


class frog extends animal {
    function __construct($name, $legs) {
        $this->name = $name;
        $this->legs = $legs;
    }
    function jump() {
        echo "hop hop";
    }
}


?>