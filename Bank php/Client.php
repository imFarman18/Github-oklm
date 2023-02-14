<?php

// Classe Client
class Client{
    //Properties

    public string $name;
    public string $gender;
    public string $dob; //date of birth

    //Constructor
    function __construct($name,$gender,$dob){
        $this->name=$name;
        $this->gender=$gender;
        $this->dob=$dob;

    }

    function presentPerson(){
        echo "Bonjour je suis " . $this->name . " ";
        if ($this->gender =='homme') {
           echo"je suis né le" .  $this->dob . " ";
        }
        else
        {
            echo "je suis née le" . " " . $this->dob . " ";
        }

    }

}








?>