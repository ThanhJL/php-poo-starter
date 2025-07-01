<?php
//charge la classe Livre
require_once 'model/Livre.php'; 
require_once 'model/Utilisateur.php';
// require_once 'exo/User.php';

//Instanciation de la classe Livre
$petitPrince = new Livre(); //ceci est un objet issue de la classe Livre
$petitPrince
    ->setNom('Le Petit Prince') // Méthode du parent Produit
    ->setPrix(8) // Méthode du parent Produit
    ->setDescription('Un petit roman') // Méthode du parent Produit
    ->setCategorie('Fantastique') // Méthode du parent Produit
    ->setNbPage(128)
    ->setAuteur('Antoine de St-Exupéry')
    ->setEdition('Gallimard')
    ->setIsbn('123456789')
; //l'opération de compléter un objet se nomme hydratation

//-----------------------------------
// $utilisateur1 = new Utilisateur();
// $utilisateur1
// ->setNom('CHU')
// ->setEmail('chu.thanh.c4@gmail.com')
// ->setIdentifiant('Thanh')
// ->setDateInscription(new \DateTime('2025-06-30')) //les dates sont des objets
// ;

// echo '<h1>Le livre nommé ' . $petitPrince->getNom() . ' est entre les mains de ' . $utilisateur1->getNom().'</h1>';

//==========================================

// $bob = new User();
// $bob
// ->setNom('Petit')
// ->setPrénom('Bob')
// ->setEmail('petit.bob@gmail.com')
// ->setDateInscription(new \DateTime('2025-06-30'))
;

// echo '<h1>Le livre coûte ' . $petitPrince->getPrixEuro() . '</h1>';
var_dump($petitPrince);
// var_dump($utilisateur1);
// var_dump($bob);