<?php

trait FirstTrait {

    public function sayFirstTrait() {
        echo __TRAIT__ . "<br>";
    }

    public function collision() {
        echo "Collision " . __TRAIT__ . "<br>";
    }
}