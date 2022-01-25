<?php

// Un nom de classe en php s'écrit toujours en PascalCase et on créé spécifiquement une fichier par classe et on donne le même nom à sa classe que celui de son fichier.

class Person {
    
    public $name;

    // on peut aussi définir une valeur par défaut au moment de la déclaration

    public $age = 0;

    public $birthdate;

    public $gender;

    public $size;

    /* on peut utiliser une méthode spécifique qui va s'exécuter automatiquement à l'instanciation : c'est le CONSTRUCTEUR.
    Cette méthode soit s'écrire comme ceci : __construct()
    Idem on peut aussi donner des valeurs par défaut aux paramètres de la méthode __construct. Ce qui signifie que si un paramètre n'est pas fourni à la création de l'objet, la valeur par défaut sera utilisée. 
    Si je souhaite mélanger des paramètrespar défaut AVEC des valeurs par défaut et d'autres SANS, je dois placer les paramètres avec des valeurs par défaut APRES ceux qui n'ont pas de valeurs par défaut
    */

    public function __construct(string $newName='', int $newSize=0, string $newBirthDate='00-00-00', string $newGender='', int $newAge=0){
        
        // J'assigne mes propriétés (=attributs) à partir des valeurs reçues en paramètres

        /*
        THIS qu'est-ce que c'est ?
        $this est une variable php qui s'utilise dans le contexte de l'objet, c'est une référence à l'objet lui-même

        Ce signe "->" est un opérateur d'objet. Il me permet d'accéder aux attributs et méthodes de mon objet. 
        */
        $this->name=$newName;
        $this->age=$newAge;
        $this->size=$newSize;
        $this->birthdate=$newBirthDate;
        $this->gender=$newGender;
    }
    // Ici on pourrait créer une méthode qu'on appelerait pour présenter notre personne
    public function presentMyPerson(){
        // $this fait toujours référence à l'objet qui dans ce cas est l'objet à l'origine de l'appel à la fonction

        echo "Salut moi je m'appelle".$this->name.'<br>';
        if($this->gender== 'man'){
            echo 'Je suis une homme et je suis né le'.$this->birthday.'<br>';
        } else {
            echo 'Je suis une femme et je suis née le'.$this->birthdate.'<br>';
        }
    }
}