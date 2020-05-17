<?php 

spl_autoload_register(function ($name) {
    include $name . '.php';
    echo "siema $name created <br>";
});

$mySecondClass = new MySecondClass( 'losowy tekst', 'losowy tekst v2' );

MyClass::say_siema();
$mySecondClass->sayFirstTrait();
$mySecondClass->collision();
$mySecondClass->get_class()->display_private_siema();
echo "<br>";
$mySecondClass->iterate_through();
?>
</body>
</html>