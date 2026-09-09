<?php

include_once "Engine.php";

class Boat extends Engine
{
    private string $width;

    public function __construct(string $brand, string $width)
    {
        parent::__construct($brand);
        $this->width = $width;
    }

    public function test()
    {
        $this->brand = "Test";
    }

    public function info(): void
    {
        echo "Je suis de marque " . $this->brand . " et je mesure " . $this->width;
    }
}