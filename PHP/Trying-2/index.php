<?php

class Person {
    private $firstName;
    private $lastName;
    private $pet;



    function __construct($firstName, $lastName, $pet) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->pet = $pet;

        echo $firstName . ' ' . $lastName . ' has been created!     ';
    }

    function setName($newName) {
        $this->firstName = $newName;
    }

    function getName() {
        return $this->firstName;
    }
}


$KamilWojtalak = new Person('Kamil', 'Wojtalak', 'pies');
$KamilWojtalak->setName('Patryk');

echo $KamilWojtalak->getName();
?>