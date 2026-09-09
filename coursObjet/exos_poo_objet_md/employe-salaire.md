## Exercice 2 (Niveau Moyen) — Système de paie en entreprise

**Objectif :** Manipuler des règles métiers dans des classes filles, redéfinir des calculs.

### Énoncé

1. Crée une classe mère **`Employe`** avec :
   * Des propriétés protégées : `$nom` (chaine) et `$salaireBase` (flottant).
   * Un constructeur pour initialiser ces deux propriétés.
   * Une méthode `calculerSalaire()` qui retourne simplement le salaire de base.
   * Une méthode `getDetails()` qui renvoie : *"Employé : [nom] | Salaire net : [salaire] €"*.

2. Crée une classe fille **`Commercial`** qui hérite de `Employe` :
   * Ajoute une propriété privée `$chiffreAffaires` (flottant) et une propriété `$commission` (flottant, ex : 0.10 pour 10 %).
   * Écris son constructeur.
   * Surcharge la méthode `calculerSalaire()` : le salaire total est le salaire de base auquel s'ajoute la commission calculée sur le chiffre d'affaires (`$salaireBase + ($chiffreAffaires * $commission)`).

3. Crée une classe fille **`Manager`** qui hérite de `Employe` :
   * Ajoute un tableau privé `$equipe` (qui contiendra d'autres objets `Employe`).
   * Écris une méthode `ajouterEmploye(Employe $e)` pour remplir le tableau.
   * Surcharge la méthode `calculerSalaire()` : le Manager touche une prime fixe de **100 € par membre** présent dans son équipe en plus de son salaire de base.

4. Instancie un `Employe`, un `Commercial` et un `Manager`. Ajoute l'employé et le commercial dans l'équipe du manager, puis affiche le détail et le salaire final de chaque personne.
