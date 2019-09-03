<?php
//do connection

//connecting to the db
$server='localhost';
$user='stephen';
$passwordd='stiveckamash';
$db1='login_info';

//create connection variable.
$conn=mysqli_connect($server,$user,$passwordd,$db1);
  
//if the regester button is clicked

//login

if (isset($_POST['login']))
{
	$username =$_POST['username'];
	$password =$_POST['password'];
	$errors= array();

	//making sure that the data is inputted correctly

	if (empty($username))
	{
		array_push($errors, "Username is needed please");
	}
	if (empty($password))
	{
		array_push($errors, "Password needed");
	}

	if (count($errors) == 0)
	{
		$password = md5($password);
		$query = "SELECT * FROM regester WHERE  username = '$username' AND password = '$password' ";
		$result = mysqli_query($conn ,$query);
		if (mysqli_num_rows($result)==1)
		{
			//login the person
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in ";
			//redirect to home page using header and location keywords
			header('location: homepage.php');

		}
		else
		{
			array_push($errors, 'Wrong pass or uname');
			header('location: login.php');
		}

	}
	else
	{
		echo "Connection Failed due to un avoidable curcummstances!";
	}
}
else
{
	echo "Connection Failed";
}


?>