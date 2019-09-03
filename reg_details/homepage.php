<?php include('server.php'); 
if (empty($_SESSION['username']))
{
       header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
        <div class="header">
               <h2>Home page</h2>
        </div>
        <div class="content">
               <? php if (isset($_SESSION['success'])); 
               {
               <div class="error_success">
                     <h3>
                            <?php
                            
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                     </h3>

               </div>
        } ?>
        <?php if (isset($_SESSION['username'])); ?>
        <p>WElcome <?php echo $_SESSION['username']; ?></p>
        <p><a href="homepage.php?logout=" style="color: red">Log Out </a></p>
        </div>
</body>
</html>