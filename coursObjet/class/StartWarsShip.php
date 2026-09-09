<?php

include_once "SpaceShip.php";

class StartWarsShip extends SpaceShip
{
    public function __construct (){
        $this->speed = 15;
    }

}