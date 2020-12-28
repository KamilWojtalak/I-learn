<?php 
    $location;

    if( $_POST['location'] ) {
        $location = $_POST['location'];
        header( "Location:http://$location" );

        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-secondary">

<main class="container pt-5">
    <div class="row row-cols-1">
        <div class="col">
            <div class="col">
                <h1 class="text-center text-light">Redirect me to: </h1>
            </div>
        </div>
        <form action=" <?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="my-5 form d-flex justify-items-center flex-wrap">
            <input type="text" class="form-control" name="location" placeholder="Write the url...">
            <input type="submit" value="Redirect!" class="btn btn-primary my-3 mx-auto">
        </form>

    </div>
</main>
    

</body>
</html>