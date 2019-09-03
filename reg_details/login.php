<?php include "login_validate.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
       <div class="header">
       	<h1>Login</h1>
       </div>
       <form  method="POST" action="login.php">
                     <!-- display error on top of the page here -->
              <?php
              $errors=array();
              if (count($errors) > 0)
              {
              ?>
              <div class ="error">
                  <?php
                  foreach ($errors as $error)
                  { 
                          
                             echo "$error<br>";
                         
                  }
               }
               ?>
               </div>
       	<div class="input">
       		<label>Username:</label>
       		<input type="text" name="username">
       	</div>
       	<div class="input">
       		<label>Password:</label>
       		<input type="Password" name="password">
       	</div>
       	<div class="input">
       		<button type="submit" name="login" class="button">Login</button>
       	</div>
       	<p>
       		Not a member?<a href="regestration.php">Regester</a>
       	</p>

       </form>
</body>
</html>