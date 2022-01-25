<?php

class PersonSecured {
    
    private $name;

    private $age = 0;

    private $birthdate;

    private $gender;

    private $size;


    public function __construct(string $newName='', int $newSize=0, string $newBirthDate='00-00-00', string $newGender='', int $newAge=0){
        
        $this->name=$newName;
        $this->age=$newAge;
        $this->size=$newSize;
        $this->birthdate=$newBirthDate;
        $this->gender=$newGender;
    }

    // Ici j'ai créé un Getteur pour pouvoir LIRE la valeur contenue dans ma propriété name
    public function getName(){
        return $this->name;
    }

    // Ici j'ai créé un Setteur pour pouvoir MODIFIER la valeur contenue dans ma propriété name
    public function setName(string $newName){
        return $this->name = $newName;
    }

    // Ici j'ai créé un Getter "généraliste" qui me permet de lire toutes mes propriétés dès lors que je transmette à ma méthode quelle propriété je veux lire.
    public function __get($property){

        // Si à l'intérieur d'un getter ou d'un setter je veux affiner le contrôle d'accès à mes données je peux rajouter des conditions par exemple :
        if ($property == "birthdate"){
            echo "Vous n'avez pas le droit de lire la propriété birthdate";
        } else {
        return $this->$property;
        }
    }

    // Ici j'ai créé un Setter "généraliste" qui me permet de modifer toutes mes propriétés dès lors que je transmette à ma méthode quelle propriété je veux modifier et quelle nouvelle valeur je veux lui assigner.
    public function __set($property, $value){
        $this->$property=$value;
    }

    public function presentMyPerson(){

        echo "Salut moi je m'appelle ".$this->name.'<br>';
        if($this->gender== 'man'){
            echo 'Je suis une homme et je suis né le '.$this->birthdate.'<br>';
        } else {
            echo 'Je suis une femme et je suis née le '.$this->birthdate.'<br>';
        }
    }
}