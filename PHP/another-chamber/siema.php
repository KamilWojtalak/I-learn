<!-- Niech użytkownik wpisze jakieś zdanie zalecane żeby było więcej nić 5 słów -->
<!-- Niech wybierze które słowo chce zmienić -->
<!-- NIech wybierze ajk te słwoo chce zmienić np zrobić z nie=go palindorme albo dac mu capitalize ma to wybierac z options albo usunąć słowo -->

<!-- miejsce na wpisanie zdania -->
<!-- wybranie które słowo lub słowa chce się zmienić -->
<!-- wybranie co chce się zrobic zdanymi słowami/słowem -->
<!-- submit button -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>

        <label for="sentence">Wpisz zdanie</label> <br/>
        <input type="text" name="sentence" id="sentence" class='input__sentence' require> <br/>
        <label for="number">Wybierz słowo, z którym chcesz coś zrobić</label> <br/>
        <input type="number" name="number" min='0' id="number" class='input__number' require><br/>
        <label for="actions">Wybierz co chcesz zrobić</label><br/>

        <input type="radio" name='action' value='palindrome' checked>Zamień na Palindorm<br/>
        <input type="radio" name='action' value='change'>Zamien na iinny wyraz<br/>
        <input type="radio" name='action' value='delete'>Usuń<br/>
        <input type="radio" name='action' value='lowercase'>Lowercase<br/>
        <input type="radio" name='action' value='uppercase'>Uppercase<br/>
        <input type="radio" name='action' value='repeat'>Powtórz słowo 3 razy<br/>

        <input type="submit" value="Rozpocznij algorytm"><br/>

    </form>


<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if ($_POST['sentence'] == '') {
        $sentence = '';
    } else {
        $sentence = $_POST['sentence'];
    }

    if ($_POST['number'] == '') {
        $number = 0;
    } else {
        $number = $_POST['number'];
    }
    if ($_POST['action'] == '') {
        $action = '';
    } else {
        $action = $_POST['action'];
    }
    

    $exploded_sentence = explode(' ', $sentence);
    $word_count = sizeof($exploded_sentence);

    echo $_POST['action'];
}

?>

</body>
</html>