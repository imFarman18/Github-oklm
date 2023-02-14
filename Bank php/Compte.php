<?php

// Classe Compte
class Compte
{
    public $balance;
    public $iban;
    public $type;
    public $decouvert;
    public $proprietaire;

    // Constructeur
    public function __construct($balance, $iban, $type, $decouvert, $proprietaire)
    {
        $this->balance = $balance;
        $this->iban = $iban;
        $this->type = $type;
        $this->decouvert = $decouvert;
        $this->proprietaire = $proprietaire;
    }

     // Méthode debit
     function debit($montant){
        $this->balance -=$montant;
        if ($this->balance < $this->decouvert){
          echo "Attention : compte bloqué !";
        }
     }

     // Méthode credit
    public function credit($montant) {
        $this->balance += $montant;
    }

    // Méthode details
    public function details() {
        echo "IBAN : " . $this->iban . "\n";
        echo "Balance : " . $this->balance . "\n";
        echo "Type de compte : " . $this->type . "\n";
    }


}

// Exemple d'utilisation
$client1 = new Client("Alice", "femme", "01/01/2000");
$client1->presentPerson();

$compte1 = new Compte(1000, "FR1234567890", "courant", -500, $client1);
$compte1->debit(500);
$compte1->credit(200);
$compte1->details();








?>