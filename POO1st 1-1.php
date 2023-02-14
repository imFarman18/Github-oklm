<?php

// Create a class Voiture adding properties marque,couleur,puissance & vitesse (all in public).
// When acceler add 50km/h & when freiner remove 50km/h


class Voiture {
    // Properties

    public $marque = "Renault";
    public $couleur = "Red";
    public $puissance = 0;
    public $vitesse = 50;
     
    function acceler(){
        $this->vitesse += 50;
        echo "<br> La $this->marque de couleur $this->couleur roule à $this->vitesse <br><br>"; 

}        


    function freiner() {
        $this->vitesse -= 50;
        echo " La $this->marque de couleur $this->couleur roule à $this->vitesse";
    }

}

$voiture = New Voiture();
$voiture-> acceler();
$voiture-> freiner();





?>