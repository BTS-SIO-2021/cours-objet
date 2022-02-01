<?php

class BankAccount {

    private $balance = 0;
    private $iban;
    private $overdraft = -1000;
    private $type;
    private $owner;
    private $bankName;

    public function __construct(string $newIban, PersonSecured $newOwner, string $newBankName, string $newType)
    {
        $this->iban=$newIban;
        $this->owner=$newOwner;
        $this->bankName=$newBankName;
        $this->type=$newType;
    }

    /* 

    J'ai besoin que mon objet BankAccount ait accès à des fonctions  :
    - credit = fonction qui me permet de rajouter des sous sur mon compte
    - debit = fonction qui me permet de retirer des sous sur mon compte. Attention je ne peux pas retirer plus que le découvert autorisé. 
    - getBalance = fonction qui va me permettre de consulter combien de sous j'ai sur mon compte
        
    */

    public function credit($amount){
        // bonne pratique venir contrôler ce que l'on recoit dans amount, exemple : est-ce bien un chiffre, ce chiffre est il positif ?
        $this->balance+=$amount;
    }

    public function debit($amount){
        // Je vérifie si on va dépasser le découvert autorisé ?
         if(($this->balance - $amount) >= $this->overdraft) {
             $this->balance-=$amount;
             return $this->balance;
         }else {
             // Si le découvert est dépassé, on annule l'opération
             return false;
         }
    }

    /*
    getBalance est un type de méthode appelé GETTER. 
    Il permet de donner accès en lecture à une propriété privée
    */
    public function getBalance(){
        return $this->balance;
    }

    public function getOwner(){
        return $this->owner;
    }

}

?>