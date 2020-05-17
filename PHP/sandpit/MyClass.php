<?php

class MyClass extends AbstractClass{

    const SIEMA = 'SIEMA CONSTANT';

    public function __construct($myClass) {
        echo "Siema MyClass created. Przykładowy tekst: $myClass <br>";
    }

    public static function say_siema() {
        echo self::SIEMA . "<br>";
    }
}