<?php include "server.php"; ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Regestration Form</title>
 	<link rel="stylesheet" type="text/css" href="regestration.css">
 </head>
 <body>
        <div class="header">
        	<h1>Regester</h1>
        </div>
        <form method="POST" action="regestration.php">
        	<!-- display error on top of the page here -->
            <?php
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
        		<label>Email:</label>
        		<input type="text" name="email">
        	</div>
        	<div class="input">
        		<label>Password:</label>
        		<input type="Password" name="password">
        	</div>
        	<div class="input">
        		<label>Confirm Password:</label>
        		<input type="password" name="password_confirm">
        	</div>
        	<div class="input">
        		<button type="submit" name="regestration" class="button">Regester</button>
        	</div>
        	<p>
        		Alreadey a member?<a href="login.php">Login</a>
        	</p>

        </form>
 </body>
 </html>