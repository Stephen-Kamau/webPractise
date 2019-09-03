

<!DOCTYPE html>
<html>
<head>
	<title>Simple login page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="login">
    	<form action="process.php" method="POST">
    		<div>
    			<h3 class="header">
    				Login page
    			</h3>
    		</div>
    	<div class="image">
    		<img src="tree.JPEG"/>
    	</div>
    	<?php
            if (@$_GET['Empty']==true)
             {

             	?>
             	<div class="alert">
             		<?php echo $_GET['Empty']; ?>
             	</div>
            	<?php


            }
    	?>
    		<?php
    	        if (@$_GET['Invalid']==true)
    	         {

    	         	?>
    	         	<div class="alert">
    	         		<?php echo $_GET['Invalid']; ?>
    	         	</div>
    	        	<?php


    	        }
    		?>
    		<div class="input">
    			<label>
    				Username:
    			</label>
    			<input type="text" name="username" placeholder="username">
    		</div>
    		<div class="input">
    			<label>
    				Password:
    			</label>
    			<input type="Password" name="password" placeholder="password">
    		</div>
    		<div class="input">
    			<input type="submit" name="submit" value="Login">
    		</div>
    	</form>
    </div>
</body>
</html>