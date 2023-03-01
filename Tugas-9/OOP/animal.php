<?php

class Animal{
    public $name="Shaun";
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($name){
        $this->name = $name;
    }
}
?>