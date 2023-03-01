<?php
require_once ('animal.php');

class Frog extends Animal{
    public $name ="buduk";
    public $legs =4;
    public $cold_blooded = "no";
    public function jump(){
        return "Hop Hop";
    }
}
?>