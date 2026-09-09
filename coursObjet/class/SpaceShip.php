<?php
// Classe parente : comportement commun à tous les vaisseaux
class SpaceShip
{
    protected int $x = 0;
    protected int $y = 0;
    protected int $speed = 1; // redéfinie dans chaque classe enfant

    public function checkPosition(): void
    {
        echo "En X : {$this->x}<br>";
        echo "En Y : {$this->y}<br>";
    }

    public function moveForward(): void
    {
        $this->y += $this->speed;
    }

    public function moveBackWard(): void
    {
        $this->y -= $this->speed;
    }

    public function moveLeft(): void
    {
        $this->x -= $this->speed;
    }

    public function moveRight(): void
    {
        $this->x += $this->speed;
    }
}
