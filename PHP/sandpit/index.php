  <?php  require("header.php");?>

    <div class="container">
        <form action="<? $_SERVER['PHP_SELF'];?>" method="post" class="row d-flex flex-wrap justify-content-center flex-column" enctype="multipart/form-data">
            <input type="file" name="image" id="image" class="col my-5">
            <input type="submit" value="Siema" class="btn btn-primary">

        </form>
        <br>
        <div class="col text-white">
            <?php print_r($_SERVER); ?>
        </div>
    </div>
</body>
</html>