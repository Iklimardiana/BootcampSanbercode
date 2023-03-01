<?php
require_once ('animal.php');

class Ape extends Animal{
    public $name ="Kera Sakti";
    public $legs =2;
    public $cold_blooded = "no";
    public function yell(){
        return "Auoo";
    }
}
?>