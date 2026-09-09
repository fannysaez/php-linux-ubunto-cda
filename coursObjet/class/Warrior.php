<?php

// Classe représentant un guerrier avec ses PV et sa force (propriétés privées)
class Warrior
{
    private string $name;              // Nom du guerrier
    private int $pvMax = 200;          // PV maximum
    private int $pv;                   // PV actuels
    private int $strength = 10;        // Force, base des dégâts
    private bool $guardianAngelUsed = false; // Ange Gardien déjà utilisé ?

    // Initialise le guerrier : nom donné, PV au maximum
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->pv = $this->pvMax;
    }

    // Attaque un autre guerrier ($target) et lui inflige des dégâts
    public function attack(Warrior $target): void
    {
        echo "{$this->getName()} attaque {$target->getName()} !<br>";

        $damage = rand($this->strength, $this->strength * 2); // dégâts aléatoires
        $critical = rand(1, 100) <= 10; // 10% de chance de critique

        if ($critical) {
            $damage *= 2; // double les dégâts en cas de critique
            echo "Critique !<br>";
        }

        // On ne peut pas modifier $target->pv directement (private)
        // donc on passe par sa méthode publique takeDamage()
        $target->takeDamage($damage);
    }

    // Applique des dégâts à ce guerrier
    public function takeDamage(int $damage): void
    {
        $this->pv -= $damage;

        if ($this->pv < 0) {
            $this->pv = 0; // évite un nombre de PV négatif
        }

        echo "{$this->name} prend {$damage} dégats<br>";
        echo "Il reste {$this->pv}/{$this->pvMax}pvs à {$this->name}<br>";

        // Déclenche l'Ange Gardien une seule fois si les PV passent sous 180
        if ($this->pv <= 180 && !$this->guardianAngelUsed) {
            $this->guardianAngelUsed = true;
            $this->pv = $this->pvMax; // restaure les PV au max
            echo "ANGE GARDIEN ACTIVE !<br>";
            echo "Il reste {$this->pv}/{$this->pvMax}pvs à {$this->name}<br>";
        }
    }

    // Vérifie si le guerrier est encore en vie
    public function isAlive(): bool
    {
        return $this->pv > 0;
    }

    // get : permet de LIRE les propriétés privées depuis l'extérieur
    public function getName(): string
    {
        return $this->name;
    }

    public function getPv(): int
    {
        return $this->pv;
    }

    public function getPvMax(): int
    {
        return $this->pvMax;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getGuardianAngelUsed(): bool
    {
        return $this->guardianAngelUsed;
    }

    // set : permet de MODIFIER les propriétés privées depuis l'extérieur
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPv(int $pv): void
    {
        $this->pv = $pv;
    }

    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }
}