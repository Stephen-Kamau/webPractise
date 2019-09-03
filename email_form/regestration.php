
<!DOCTYPE html>
<html>
<title>regestration form</title>
<link rel="stylesheet" type="text/css" href="regestration.css">
<body>
    <div class="form">
        <h3>Email Regestration form</h3>
        <form>
            <?php include "validate.php"; ?>
            <?php
               
               echo $error;
            ?>
        <div>
          <form  method="POST" action="validate.php" >
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname"> 
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <label for="password2">Confirm Password:</label>
            <input type="password" id="password2" name="password2">
            <label for="country">State</label>
            <select id="country" name="country">
              <option value="australia">Kenya</option>
              <option value="canada">Uganda</option>
              <option value="usa">Tanzania</option>
            </select>
            <input type="submit" name="submit" value="Submit">
          </form>
        </div>
        </form>
    </div>

</body>
</html>
