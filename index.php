<?php
//charge la classe Livre
require_once 'model/Livre.php'; 
require_once 'model/Utilisateur.php';

//Instanciation de la classe Livre
$petitPrince = new Livre(); //ceci est un objet issue de la classe Livre
$petitPrince
    ->setTitre('Le Petit Prince')
    ->setNbPage(128)
    ->setAuteur('Antoine de St-Exupéry')
    ->setEdition('Gallimard')
    ->setIsbn('123456789')
; //l'opération de compléter un objet se nomme hydratation

$utilisateur1 = new Utilisateur();
$utilisateur1
->setNom('CHU')
->setEmail('chu.thanh.c4@gmail.com')
->setIdentifiant('Thanh')
->setDateInscription(new \DateTime('2025-06-30')) //les dates sont des objets
;

echo '<h1>Le livre nommé ' . $petitPrince->getTitre() . ' est entre les mains de ' . $utilisateur1->getNom().'</h1>';
// var_dump($petitPrince);
// var_dump($utilisateur1);