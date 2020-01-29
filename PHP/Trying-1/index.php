<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    $title = 'Witaj świecie, pierwszy blog post!';
    $description = 'Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum ';

    include 'article.php';

    $title = 'Drugi blog post! Pora zacząć przygodę!';
    $description = 'Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum Lorem impsum ';
    
    include 'article.php';
    ?>

    <ul>
        <?php if (4 > 2) :?>
            <li>Cztery jest większe niż dwa</li>
        <?php else: ?>
            <li>Dwa jest większe od dwóch</li>
        <?php endif; ?>
    </ul>


</body>
</html>