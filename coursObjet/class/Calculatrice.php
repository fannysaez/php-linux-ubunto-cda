<?php

class Calculatrice
{
    private float $nombre1;
    private float $nombre2;

    public function __construct(float $nombre1 = 0, float $nombre2 = 0)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function add(): float
    {
        return $this->nombre1 + $this->nombre2;
    }

    public function subtract(): float
    {
        return $this->nombre1 - $this->nombre2;
    }

    public function multiply(): float
    {
        return $this->nombre1 * $this->nombre2;
    }

    public function divide(): float|string
    {
        if ($this->nombre2 === 0.0) {
            return "Erreur : Division par zéro impossible.";
        }
        return $this->nombre1 / $this->nombre2;
    }
}