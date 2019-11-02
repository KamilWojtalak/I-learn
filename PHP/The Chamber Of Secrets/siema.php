<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Siema</h1>
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
    ?>
</body>
</html>