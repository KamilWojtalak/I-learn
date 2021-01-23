<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inna strona</title>
</head>
<body>
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $water = $_POST['woda'];
        $roll = $_POST['bulka'];
        $cake = $_POST['ciastko'];

        echo "$water i $roll i $cake";
    }
    
    ?>
</body>
</html>