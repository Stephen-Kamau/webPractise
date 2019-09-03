<?php
session_start();
$username="";
$email="";
$password="";
$password_confirm="";
$errors= array();
 
//do connection

//connecting to the db
$server='localhost';
$user='stephen';
$passwordd='stiveckamash';
$db1='login_info';

//create connection variable.
$conn=mysqli_connect($server,$user,$passwordd,$db1);
  
//if the regester button is clicked
if (isset($_POST['regestration']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	//making sure that the data is inputted correctly

	if (empty($username))
	{
		array_push($errors, "Username is needed please");
	}
	if (empty($email))
	{
		array_push($errors, "Email is needed please");
	}
	if (empty($password))
	{
		array_push($errors, "Password is needed please");
	}
	if ($password != $password_confirm)
	{
		array_push($errors, "The two password does not match");
	}
	//if no errors
	//save the details to the database
	if (count($errors) == 0) {
		$password= md5($password);//encription of the password

		#user the database
		$select = "SELECT * FROM regester WHERE username = '$username' || email= $'$email'";
		$result = mysqli_query($conn,$select);
		$num=mysqli_num_rows($result);
		 if ($num > 0)
		 {
		    echo "Username or email already  already exists";
		    header("Location:login.php");

		 }

		 else{


		$insert_data="INSERT INTO regester (username,email,password) VALUES ('$username','$email','$password')";
	    mysqli_query($conn,$insert_data);

	    $_SESSION['username'] = $username;
	    $_SESSION['success'] = "You Have regestered successful\n Please login below to access our resourses";
	    //redirect to home page using header and location keywords
	    header('location: homepage.php');
	}}

}

//logout 
if (isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}
?>