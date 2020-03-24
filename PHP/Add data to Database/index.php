    <?php require('header.php'); ?>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $host = 'localhost';
            $username = 'root';
            $userPassword = '';

            $conn = mysqli_connect($host, $username, $userPassword) or die('Couldn\'t connect to database');

            $sqlCreateDatabase = 'CREATE DATABASE IF NOT EXISTS simple_form';
            mysqli_query( $conn, $sqlCreateDatabase ) or die(mysqli_error($conn));

            mysqli_select_db( $conn, 'simple_form' ) or die(mysqli_error($conn));

            $query_file = 'table.sql';

            $fp = fopen($query_file, 'r');
            $sqlTable = fread($fp, filesize($query_file));
            fclose($fp);

            mysqli_query( $conn, $sqlTable ) or die(mysqli_error($conn));

            $sqlInsert = "INSERT INTO form (user_name, user_password, user_email, user_join_date) VALUES ( ";
            $sqlInsert .= "'$name', '$password', '$email', NOW()";
            $sqlInsert .= ")";

            mysqli_query( $conn, $sqlInsert ) or die(mysqli_error( $conn ));

            mysqli_close( $conn );

            $name = '';
            $password = '';
            $email = '';
            $conn = null;
        }
    ?>

    <main class="container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="row row-cols-1 justify-content-center my-5">
            <label for="name" class=" p-2">Name: </label>
            <input type="text" name="name" id="name" class="py-1 px-3" required>
            <label for="password" class=" p-2">Password: </label>
            <input type="password" name="password" id="password" class="py-1 px-3" required>
            <label for="email" class="p-2">Email: </label>
            <input type="email" name="email" id="email" class="py-1 px-3" required>
            <input type="submit" value="Send records to the database" class="btn btn-dark mt-4">
        </form>
    </main>

   </body>
</html>