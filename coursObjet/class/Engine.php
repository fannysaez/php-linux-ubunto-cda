<?php

abstract class Engine
{
    protected string $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function info(): void
    {
        echo "Je suis de marque " . $this->brand;
    }
}