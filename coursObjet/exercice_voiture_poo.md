# Exercice PHP : Gestion du réservoir d'une voiture (POO Débutant)

## Objectif
Pratiquer la Création de classe, l'instanciation, la manipulation de propriétés et la logique conditionnelle dans les méthodes.

---

## Enoncé

Vous devez créer une classe **`Car`** qui gère l'état d'un véhicule, son niveau de carburant et son déplacement.

### Spécifications de la classe

#### 1. Propriétés (en anglais)
Toutes les propriétés doivent être déclarées avec la visibilité **`public`** :

* **`brand`** *(string)* : La marque de la voiture.
* **`tankCapacity`** *(float)* : La capacité maximale du réservoir en litres.
* **`fuelLevel`** *(float)* : Le niveau actuel du réservoir en litres.
* **`isStarted`** *(bool)* : L'état du moteur (`true` si démarrée, `false` par défaut).

#### 2. Le constructeur `__construct`
Le constructeur prend en paramètres la marque (**`brand`**) et la capacité du réservoir (**`tankCapacity`**).
À l'instanciation :
* Le réservoir est plein (`fuelLevel` est égal à `tankCapacity`).
* La voiture est éteinte (`isStarted` est réglé sur `false`).

#### 3. Les méthodes

* **`start()`**
  * Si la voiture est déjà démarrée, afficher un message indiquant qu'elle roule déjà.
  * Si le réservoir est vide (`fuelLevel <= 0`), afficher qu'il est impossible de démarrer sans carburant.
  * Sinon, passer `isStarted` à `true` et afficher un message de démarrage.

* **`refuel()`**
  * Remet `fuelLevel` au niveau maximum (`tankCapacity`).
  * Affiche un message confirmant que le plein est fait.

* **`drive(float $tripKm)`**
  * **Vérification 1 :** Si la voiture n'est pas démarrée (`isStarted === false`), afficher qu'il faut d'abord démarrer le moteur.
  * **Calcul :** La consommation est fixée à **0.05 litre par kilomètre** (`$tripKm * 0.05`).
  * **Vérification 2 (Panne) :** Si la consommation requise dépasse le `fuelLevel` actuel :
    * Calculer la distance parcourue avant la panne (`$fuelLevel / 0.05`).
    * Mettre `fuelLevel` à `0`.
    * Passer `isStarted` à `false` (le moteur cale).
    * Afficher le nombre de km parcourus avant d'être en panne et inviter à refaire le plein.
  * **Sinon (Carburant suffisant) :**
    * Soustraire la consommation du `fuelLevel`.
    * Afficher la distance parcourue ainsi que le reste de carburant.

---

## Scénario de test

```php
<?php

// 1. Création d'une voiture Peugeot de 50L
$car = new Car("Peugeot", 50.0);

// 2. Tente de rouler sans démarrer (Doit échouer)
$car->drive(20);

// 3. Démarre la voiture
$car->start();

// 4. Parcourt 100 km (Consomme 5L -> Reste 45L)
$car->drive(100);

// 5. Tente un long trajet de 1000 km (Panne sèche après 900 km, moteur cale)
$car->drive(1000);

// 6. Tente de redémarrer (Doit refuser car réservoir vide)
$car->start();

// 7. Fait le plein et redémarre
$car->refuel();
$car->start();

?>
```
