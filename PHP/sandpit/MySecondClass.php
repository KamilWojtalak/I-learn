<?php

class MySecondClass extends MyClass implements SiemaInterface {
    
    private $private_siema = 'Private Siema';

    use FirstTrait, SecondTrait {
        SecondTrait::collision insteadOf FirstTrait;
    }

    public function __construct($myClass = '', $mySecondClass = '') {
        parent::__construct($myClass);
        echo "Siema v2, Losowy tekst: $mySecondClass <br>";
    }

    public function get_class() {

        return new class( $this->private_siema ) {
            private $private_siema;

            public function __construct( $private_siema ) {
                $this->private_siema = $private_siema;
            }
            public function display_private_siema() {
                echo $this->private_siema;
            }
        };
    }

    public function iterate_through() {
        echo __CLASS__ . " iteration: <br>";
        foreach( $this as $key => $value) {
            echo "$key: $value <br>";
        }
    }
}