<?php

include_once "Employe.php";

class Manager extends Employe
{
    private array $equipe = [];
    
    public function ajouterEmploye(Employe $e): void
    {
        $this->equipe[] = $e;
    }

    public function calculerSalaire(): float
    {
        $prime = count($this->equipe) * 100; // 100€ par employé dans l'équipe
        return $this->salaireBase + $prime;
    }

    // Override de getDetails() : ajoute le nombre de membres dans l'équipe
    public function getDetails(): string
    {
        $nbMembres = count($this->equipe);
        return "Manager : {$this->nom} | Salaire net : {$this->calculerSalaire()} € | Équipe : {$nbMembres} membre(s)";
    }

    // Additionne les salaires de l'équipe, en excluant les Manager éventuels
 public function getTotalSalaires(): float
    {
        $total = 0;

        foreach ($this->equipe as $membre) {
            if (!$membre->estManager()) {
                $total += $membre->calculerSalaire();
            }
        }

        return $total;
    }
    }