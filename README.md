# Premiers pas avec la POO
La programmation orientée objet est basé sur un système qu'on appelle : les `classes`

Ces classes sont comme un moule (de cuisine) pour définir ce que représente quelque chose dans une application. Ce quiu signifue que chaqye application aura sa propre vision d'une classe qui porterai le même nom que celles que nous avons

## les classes parent et enfant

un classe en PHP, est déclarée avec le mot-chlé `class` ou `final class`.
Afin de l'utiliser, il faudra créer un instace d'elle. Pour cela le lot-clé correspondant est `new`.

Ex -> voir le fichier 'Utilisateur.php' pour la déclaration et 'index.php' pour l'utilisation.



Pour ne pas se répétér dans l'organisation des classes, on dispose d'un outil qui facilite de partage des propriétés et des méthodes : `l'héritage`.

Afin de mettre en place un héritage, il faut conceptualisé la stucture de nos classes.
Ex pour un e-commerce:

Un site e-commerce est un application qui contient des produits. Cependant, les produits dispose de caractéristiques propres à elles, comme la taille pour un vêtement, le réseau pour un smartphone ou encore l'édition un livre.

En revanche; certaines propriétés sont communes à tous les produits, comme le nom, le prix, la description. De ce fait, on peut les rassembler dans une classe parente qui ne sera jamais instanchiée directement avec le terme `new`.

Compte tenu du fait que cette classe parente ne sera jamais instancié, on peut la déclarer comme asbtraite avec le mot-clé `abstract`

```php
abstract class Produit
{
    private string $nom;
    private string $ref;
    private string $prix;
    private string $categorie;
}
```

Maintenant que la classe parent est en place, il faut la lier avec les classes définies commes enfants. Pour cela, on utilise le mot-clé `extends` qui permet de déclater une classe enfant.

```php
require_once 'Produit.php';
class Livre extends Produit
{
    private int $nbPage;
    private string $auteur;
    private string $edition;
    private string $isbn;
}
```
Cela aura pour résultat, la mise à disposition de l'ensemble des propriétés et des méthodes de la classe parente dans les classes enfants. On pourra alors faire ce genre de choses:

```php
//...

$bouquin = new Livre();
$bouquin
    ->setNom('Le Petit Prince')
    ->setPrix(8)
    //...
    ;
```
### Accesseurs et Mutateurs

Lorsaue ns définissions des propriétés dans une classe; il est judicieux de mettre en place une structure sécurisée pour intéragir avec. C'est là qu'entre en jeu les 'Accesseurs' et 'Mutateurs' nommés en anglais 'Getters' et 'Setters'. Ce sont des fonctions mais dans un classe on les appelles des 'méthodes'

Ex -> voir le fichier 'Utilisateur.php' pour la déclaration et 'index.php' pour l'utilisation.*
