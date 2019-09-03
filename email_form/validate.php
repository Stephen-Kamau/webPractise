<?php
session_start();
$error=Null;
$fname='';
$lname='';
$username='';
$password='';
$password2='';
$email='';
$country='';

if (isset($_POST['submit']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $username=$_POST['username'];
    $password = $_POST['password'];
    $password2 =$_POST['password2'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    if (empty($fname)) 
    {
        $error = "<p> Please enter your first name</p>";
    }
    elseif (empty($lname)) 
    {
        $error = "<p> Please enter your last name</p>";
    }
    elseif (empty($username)) 
    {
        $error = "<p> Please enter your username</p>";
    }
    elseif (empty($password)) 
    {
        $error = "<p> Please choose your password</p>";
    }
    elseif (empty($password2)) 
    {
        $error = "<p> Please choose your confirmatory password</p>";
    }
    elseif (empty($email)) 
    {
        $error = "<p> Please enter your Email Adress</p>";
    }
    elseif (empty($country)) 
    {
        $error = "<p> Please enter your current citzenship country</p>";
    }

    elseif (strlen($username) < 5)
    {
        $error = "<p>Your username must be greater than 5 characters</p>";
    }

    elseif ($password2 != $password)
    {
        $error = "<p>The pass does not match...Please check it and repeat</p>";
    }

    else
    {
        //validate the form 
        //post the data to the db
        //connect to db

        $server='localhost';
        $user='stephen';
        $pass='stiveckamash';
        $db='login_info';
        $conn=mysqli_connect($server,$user,$pass,$db);
        if (!$conn)
        {
            die('Connection Failed!:'.mysqli_connect_error());
        }

         //check your data to remove sensitive informtion
        $fname= mysqli_real_escape_string($fname);
        $lname=  mysqli_real_escape_string($lname);
        $username= mysqli_real_escape_string($username);
        $email=  mysqli_real_escape_string($email);
        $country=  mysqli_real_escape_string($country);
        $password= mysqli_real_escape_string($password);
        $password2= mysqli_real_escape_string($password2);

        //generating verification key 
        //the vkey is based on time stamp

        $vkey = md5(time().$username);

        //password encription

        $password=md5($password);

        //insert data to the database

        #user the database
        $select = "SELECT * FROM email_reg WHERE username = '$name'";
        $result = mysqli_query($conn,$select);
        $num=mysqli_num_rows($result);
         if ($num ==1)
         {
            echo "Username already exists";
            header("Location:login.php");

         }
         else
         {
            $insert=mysqli_query("INSERT INTO email_reg (fname , lname , username , email , password , country , vkey)
                VALUES ('$fname','$lname','$username','$email','$password','$country','$vkey')");
            mysqli_query($conn,$insert);
            echo "Regestration Successful";

         }

    }
}

?>