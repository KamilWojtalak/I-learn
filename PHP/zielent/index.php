<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siema</title>
</head>
<body>
    
<?php 
$email = '';
$errors = array('email' => '');

    if (isset($_POST['submit'])) {
        $email = htmlspecialchars($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] =  "$email nie jest zapisany w poprawnym formacie!";
        }
        if (!array_filter($errors)) {
            header('Location: siema.php');
        }
    }



?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="text" name="email" id="" value='<?php echo $email ?>'>
    <div class=""><?php echo $errors['email']; ?></div> <br />

    <input type="text" name="siema2"  id=""> <br /> <br />
    <input type="text" name="siema3" id=""> <br /> <br />
    <input type="text" name="siema4" id=""> <br /> <br />
    <input type="submit" name='submit' value="SIEMA">
</form>




</body>
</html>