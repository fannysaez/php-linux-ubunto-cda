<?php

class Car
{
    public string $brandt;
    public float $tankCapacity;
    public float $fuelLevel;
    public bool $isStarted;
    public float $consume = 0.05;

    public function __construct(string $brandt, float $tankCapacity)
    {
        $this->brandt = $brandt;
        $this->tankCapacity = $tankCapacity;
        $this->fuelLevel = $tankCapacity;
        $this->isStarted = false;
    }

    public function drive(float $tripKm): void
    {
        if (!$this->isStarted) {
            echo "Il faut d'abord démarrer le moteur.<br>";
            return;
        }

        $consumption = $tripKm * $this->consume;

        if ($consumption > $this->fuelLevel) {
            $maxKm = $this->fuelLevel / $this->consume;
            $this->fuelLevel = 0;
            $this->isStarted = false;
            echo "Panne sèche après {$maxKm} km ! Le moteur cale. Pensez à refaire le plein.<br>";
        } else {
            $this->fuelLevel -= $consumption;
            echo "Trajet de {$tripKm} km effectué. Reste {$this->fuelLevel}L.<br>";
        }
    }

    public function start(): void
    {
        if ($this->isStarted) {
            echo "Elle roule déjà.<br>";
            return;
        }
        if ($this->fuelLevel <= 0) {
            echo "Impossible de démarrer sans carburant <br>";
            return;
        }
        $this->isStarted = true;
        echo "Démarrage . <br>";
    }
    public function refuel(): void
    {
        $this->fuelLevel = $this->tankCapacity;
        echo "Plein effectué. Réservoir : {$this->fuelLevel}L.<br>";
    }
}
