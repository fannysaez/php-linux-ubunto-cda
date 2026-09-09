<?php
// Charge la classe parente avant de pouvoir en hériter
include_once "Employe.php";

// Hérite de Employe : possède nom, salaireBase, calculerSalaire(), getDetails()
class Commercial extends Employe
{
    private float $chiffreAffaires; // Chiffre d'affaires généré par le commercial
    private float $commission;      // Taux de commission (ex: 0.10 pour 10%)

    // Initialise les propriétés héritées via le parent, puis les propriétés propres à Commercial
    public function __construct(string $nom, float $salaireBase, float $chiffreAffaires, float $commission)
    {
        parent::__construct($nom, $salaireBase); // délègue l'init de nom/salaireBase à Employe
        $this->chiffreAffaires = $chiffreAffaires;
        $this->commission = $commission;
    }

    // Redéfinit calculerSalaire() : salaire de base + commission sur le chiffre d'affaires
    // getDetails() (hérité d'Employe) 
    public function calculerSalaire(): float
    {
        return $this->salaireBase + ($this->chiffreAffaires * $this->commission);
    }

     // Override de getDetails() : ajoute le chiffre d'affaires à l'affichage
    public function getDetails(): string
    {
        return "Commercial : {$this->nom} | Salaire net : {$this->calculerSalaire()} € | CA : {$this->chiffreAffaires} €";
    }
}
