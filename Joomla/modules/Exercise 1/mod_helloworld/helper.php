<?php

defined('_JEXEC') or die('Restricted acces');

class ModHelloWorldHelper {

    public static function greeting($name = 'Kamil') {
        return 'Cześć, mam na imię ' . $name;
    }
}