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

    public function credit($amount){
        // bonne pratique venir contrôler ce que l'on recoit dans amount, exemple : est-ce bien un chiffre, ce chiffre est il positif ?
        $this->balance+=$amount;
    }


    /* 

    J'ai besoin que mon objet BankAccount ait accès à des fonctions  :
    - credit = fonction qui me permet de rajouter des sous sur mon compte
    - debit = fonction qui me permet de retirer des sous sur mon compte. Attention je ne peux pas retirer plus que le découvert autorisé. 
    - getBalance = fonction qui va me permettre de consulter combien de sous j'ai sur mon compte
        
    */

}

?>