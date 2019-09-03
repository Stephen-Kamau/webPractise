<!DOCTYPE html>
<html>
<title>login form</title>
<link rel="stylesheet" type="text/css" href="regestration.css">
<body>
    <div class="form" style="height: 65%;">
        <h3>Login form</h3>

        <div>
            <?php 
            $error=Null;
            echo $error;
             ?>
          <form action="login_validate.php" method="POST"> 
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Submit" name="submit">
          </form>
        </div>
    </div>

</body>
</html>