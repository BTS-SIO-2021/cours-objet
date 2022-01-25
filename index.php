<?php
$articleItem1 = [
    "title" => "Je suis un titre",
    "author" => "Mathilde",
];

$personMartine = [
    "name" => "Martine",
    "age" => 58,
    "birthdate" => "1960-03-02",
    "gender" => "woman",
    "size" => 175,
    "weight" => 65, 
];

$personJohn = [
    "name" => "John",
    "age" => 25,
    "birthdate" => "1989-03-02",
    "gender" => "man",
    "size" => 195,
    "weight" => 100, 
];

function presentMyPerson(array $personData){
    echo "Salut moi je m'appelle".$personData['name'].'<br>';
    if($personData['gender']== 'man'){
        echo 'Je suis une homme et je suis né le'.$personData['birthdate'].'<br>';
    } else {
        echo 'Je suis une femme et je suis née le'.$personData['birhtdate'].'<br>';
    }
}

presentMyPerson($personJohn);

// Maintenant on va faire la même chose en objet.
/* J'ai créé mon "moule", soit ma classe pour construire des objet Person. J'ai fait les choses bien, j'ai créé ma classe dans un fichier à part qui porte le nom de ma classe. 
Je veux et je peux créer désormais des objets Person, PREMIERE CHOSE A FAIRE : j'inclue le(s) fichier(s) de classe dont j'ai besoin 
*/
require 'classes/Person.php'; 

$personJudicael = new Person('Judicael', 36, '03-11-1985', 'man', 180);

;?>