<?php
    include("db.php");



        
        if(isset($_POST['Login'])){
            $username = $_POST['username'];
            $password = $_POST['password_1'];

            $query = mysqli_query($con, "SELECT `username`, `password` FROM `users` WHERE `username` = '$username'");

            // checks for the number of rows involved with the query
            $check = mysqli_num_rows($query);

            // redirects to register if row is not found
            if ($check == 0){
                header("Location: Register.php");
            } else {
                echo "Welcome";
            }
        }
    
















?>