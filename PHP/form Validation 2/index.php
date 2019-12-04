<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIEMA</title>
</head>
<body>
    
    <?php
    
    require('form-validation.php');
    
    if (isset($_POST['submit'])) {

        $validation = new Validator($_POST);
        $validation->validate();
    }


    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" value=''>
        <div><?php echo $validation->errors['empty'] ?? '' ?></div>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" value=''>
        <div></div>
        <input type="submit" value="siema" name='submit'>
    
    </form>


</body>
</html>