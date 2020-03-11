<?php include('Login_process.php'); ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="_Login Pages Styles.css" type="text/css" media="all">

</head>

<body>

<div class="totalparent">
<!-- Total Parent Allows CSS To Move-->
  <div class="grandmachild">
<!-- English Grandma Logo Box-->
    <div class="GrandmaLogo">
<!-- Grandma Logo Image-->
      <img src="English Grandma Logo.jpg" width="433px" height="384px">
    </div>
  </div>

  <div class ="regchild">
<!-- Login Is Inside A Second Child of Body for CSS-->
        <div class = "regbox">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
      <!-- PHP Registration Form-->
          <div class = "input-group">
             <label>Username</label>
             <input type= "text" name="username">
          </div>
          <div class = "input-group">
             <label>Password</label>
             <input type= "password" name="password_1">
          </div>
          <div class = "input-group">
             <button type= "Submit" name="Login" class="btn">Login</button>
          </div>
          <p> Not yet a member? <a href="Register.php"> Sign Up </a> </p>


        </form>
    </div>
</div>



</body>

</html>
