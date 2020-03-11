<?php

  $username = "";
  $email = "";
  $errors = array();

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "test_drive";


    //connect to the database
  $db = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    //if the register button is clicked
  if (isset($_POST['register'])) {

    // changed mysql_real_escape_string() to mysqli_real_escape_string()

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
      //ensure that form fields are filled properly
      if (empty($username)) {
          array_push($errors, "Username is required"); //add error to errors array
            }
      if (empty($email)) {
          array_push($errors, "Email is required");
            }
      if (empty($password_1)) {
          array_push($errors, "Password is required");
            }
      if ($password_1 != $password_2){
          array_push($errors, "The two passwords do not match");
            }
      //if there are not errors, save user to database
      if (count($errors) == 0){
          $password = md5($password_1); //encrypt password before storing in database (security)
          $sql = "INSERT INTO users (username, email, password)
                      VALUES ('$username', '$email', '$password')";
          mysqli_query($db, $sql);


            }

      }




 ?>
