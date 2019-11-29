<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zelent poradnik</title>
</head>
<body>
    
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $animals = [];

    $animal = $_POST['animal'];

    array_push($animals, $animal);
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method='post'>

    <label for="animal">Podaj zwierze: </label>
    <input type="text" name="animal" id="animal"> <br /><br />

    <input type="submit" value="Wyślij zamówienie!"> <br />
</form>

<div class="animals__container"><?php print_r($animals) ?></div>

<?php 

$peopleOne = ['Siema', 'siema'];
$peopleTwo = ['Siemanoi', 'siemano'];

print_r(array_merge($peopleOne, $peopleTwo));

?>


</body>
</html>