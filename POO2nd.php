<?php

class Customer {
    public $name;

 function __construct($name){
    $this->name=$name;
 }

 function __destruct(){

    echo"Fin du script pour " . $this->name;

 }
}

$john = new Customer('John');
echo $john->name;
echo "<br>";


?>