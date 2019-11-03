<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="siema.css">
</head>
<body>

    <?php include 'header.html' ?>

    <?php
        $title = 'Mój pierwrszy artykuł';
        $first__description = 'Mój dzień...';
        $second__description = 'Dlaczego uczę się usseles rzeczy w szkole?';

        include 'article.php'
    ?>
    
    <?php 
        $title = 'Mój drugi atrykuł';
        $first__description = 'Nie wiem co napisać, więc napiszę jakeiś głupoty';
        $second__description = 'Jakieś głupoty v2, ale troche dłuższe, bo tekst musi troche zająć';

        include 'article.php';
    ?>

    <?php
    class siema {
        function doSomething() {
            return 'Something' ;
        }
    }

    $siemaszko = new siema();

    echo gettype($siemaszko);

    echo '<br>';

    echo gettype($siemaszko->doSomething());
    
    echo '<br>';

    echo $siemaszko->doSomething();

    echo '<br>';

    $foo = 'Siema';
    $boo = &$foo;
    $boo = $boo . ', jestem Kamil';

    echo $boo;
    echo '<br>';
    echo $foo;

    class Test {
        function word_count($word) {
            return Str_word_count($word);
        }

        function reverse_string($word) {
            return Strrev($word);
        }

        function lower_case($word) {
            return Strtolower($word);
        }
    }

    $TestVar = new Test();

    echo '<br />';
    echo $TestVar->reverse_string('siema');
    echo $TestVar->lower_case(' Siema Co TAm');
    echo '<br />';
    echo '<br />';


    include 'Osoba/Osoba.php';
    $Kamil = new Osoba('Kamil', 'Wojtalak', 'dobrej muzy');
    $Patryk = new osoba('Patryk', 'RODO', 'słabej muzy, proste');

    $Kamil->getFirstName();
    $Kamil->changeLastName('Wróbel');
    $Kamil->getLastName();
    echo '<br />';
    echo '<br />';

    $KamilWojtalak = new KamilWojtalak('Kamil', 'Wojtalak', 'dobrej muzy');
    $KamilWojtalak->specjalnaFunkcja();
    
    ?>
</body>
</html>