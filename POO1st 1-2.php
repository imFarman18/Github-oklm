<?php



class Voiture {
    // Properties

    public $marque;
    public $couleur ;
    public $puissance = 0;
    public $vitesse = 50;
     
 function __construct($marque , $couleur){
    $this->marque= $marque;
    $this->couluer= $couleur;
}
    public function getMarque(){
        return $this->marque;
    }

    public function getCouleur(){
        return $this->couleur;
    }


    public function crash($Voiture){
        echo "Ma $this->marque s'est crashée avec une $Voiture";
    }

 }


 

 $merco = New Voiture('Ferrari','Red');

 $merco->crash('Bugatti');




?>