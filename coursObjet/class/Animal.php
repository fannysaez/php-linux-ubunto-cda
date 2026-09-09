<?php

class Animal
{
    private string $name;
    private int $age;
    private int $nombrePattes;

public function __construct(string $name, int $age, int $nombrePattes)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nombrePattes = $nombrePattes;
    }
//get
public function getName(): string {
    return $this->name;
}
public function getAge(): int {
    return $this->age;
}
public function getNombrePattes(): int {
    return $this->nombrePattes;
}

//set
public function setName(string $newName): void 
{
    $this->name = $newName;
} 
public function setAge(int $newAge): void
{
    $this->age = $newAge;
}
public function setNombrePattes(int $newNombrePattes): void
{
    $this->nombrePattes = $newNombrePattes;
}

public function description() {
    echo "Je m'appelle {$this->name}, j'ai {$this->age} ans, j'ai {$this->nombrePattes} pattes.";
}

}
