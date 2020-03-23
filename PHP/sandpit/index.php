<?php
   $date = getdate();
?>
  
  <?php  require("header.php");?>

    <div class="container">
        <form action="<? $_SERVER['PHP_SELF'];?>" method="post" class="row d-flex flex-wrap justify-content-center flex-column" enctype="multipart/form-data">
            <input type="text" name="email" id="email" class="col my-5">
            <input type="submit" value="Siema" class="btn btn-primary">

        </form>
        <br>
        <div class="col text-white">
            <?php 
                foreach($date as $key => $value) {
                    echo "$key: $value" . '<br>';
                }
            ?>
            <br>
            <?php echo date("m/d/y G.i:s<br>", time());?>
        </div>
    </div>
</body>
</html>