<?php
class Osoba {
    private $firstName;
    private $lsdtName;
    private $music;

    function __construct($firstName, $lastName, $music) {
        $this->firstName = $firstName;
        $this->changeLastName($lastName);
        $this->music = $music;

        echo $firstName . ' ' . $lastName . '. Słucham ' . $music . '.';
        echo '<br />';
        echo '<br />';
    }

    function getFirstName() {
        echo $this->firstName;
        return $this->firstName;
    }
    function getLastName() {
        echo $this->lastName;
        return $this->lastName;
    }

    function changeLastName($newLastName) {
        $this->lastName = $newLastName;
    }
}

class KamilWojtalak extends Osoba {
    function specjalnaFunkcja() {
        echo 'Siema, mówię siema';
    }
}
?>

