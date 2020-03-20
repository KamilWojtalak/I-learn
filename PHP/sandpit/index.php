<?php

    $fileName = 'header.php';
    $file = fopen($fileName, 'r+');

    $fileSize = filesize($fileName);
    $fileText = fread($file, $fileSize);

    fclose($file);

    echo $fileText . '<br />';

?>
  <?php // require("header.php");?>

    <div class="container">
        <div class="row">
            <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="col my-5">
                <input class="" type="text" name="name" id="" placeholder="Name"> <br/>
                <input type="text" name="lastname" id="" placeholder="Lastname"> <br/>
                <input type="submit" value="Siema" class="btn btn-primary my-3">
            </form>
            <div class="w-100"></div>
            <div class="col text-white"><?php print_r($fileText);?></div>
        </div>
    </div>
    
</body>
</html>