<?php
// Classe mère : représente un employé de base
class Employe
{
    protected string $nom;         // Nom de l'employé (protected : accessible aux classes enfants)
    protected float $salaireBase;  // Salaire de base (protected : accessible aux classes enfants)

    // Init nom et salaire de base à la création de l'objet
    public function __construct(string $nom, float $salaireBase)
    {
        $this->nom = $nom;
        $this->salaireBase = $salaireBase;
    }

    // Calcule le salaire : salaire de base
    public function calculerSalaire(): float
    {
        return $this->salaireBase;
    }

    // Appelle calculerSalaire() : utilisera automatiquement la version de la classe enfant si redéfinie
    public function getDetails(): string
    {
        return "Employé : {$this->nom} | Salaire net : {$this->calculerSalaire()} €";
        // Renvoie une phrase résumant le nom et le salaire de l'employé
    }
}
