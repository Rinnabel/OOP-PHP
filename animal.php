<?php

class animal {
    public static $legs = 2;
    public static $cold_blooded = "false";
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$sheep = new animal("shaun");

echo $sheep->get_name(); // "shaun"
echo "<br>";


/*echo animal::$legs; // 2
echo "<br>";
echo animal::$cold_blooded; // false
*/

?>

