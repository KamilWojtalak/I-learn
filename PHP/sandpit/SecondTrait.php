<?php

trait SecondTrait {

    public function saySecondTrait() {
        echo __TRAIT__ . "<br>";
    }

    public function collision() {
        echo "Collision " . __TRAIT__ . "<br>";
    }
}