<?php
/*$server='localhost';
$user='stephen';
$password='stiveckamash';
$db='login_info';
$conn=mysqli_connect($server,$user,$password,$db);
if (!$conn)
{
	die('Connection Failed!:'.mysqli_connect_error());
}

mysql_connect($server,$user,$password,$db);
if (isset($_POST['username']))
{
	$username=$_POST['username'];
	$password= $_POST['password'];

	sql= "SELECT * FROM loginphp WHERE' username = ".$username."' AND 'password = ".$password."' LIMIT=1";
	$result = mysqli_query($conn,sql);

	if (mysqli_num_rows($results)==1)
	 {
		echo "You have successfully login ";
		exit();
	}
	else
	{
		echo "You have provided Incorect details";
		exit();
	}
}*/
session_start();
require_once("admin_details.php");
if (isset($_POST['submit']))
{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
		header("location:login.php?Empty=Please fill your details");
	}
	else
	{
		$sql="SELECT * FROM loginphp WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."' ";
		$result=mysqli_query($conn,$sql);
		if (mysqli_fetch_assoc($result)) 
		{
			$_SESSION['user']=$_POST['username'];
			header("location:welcome.php");
		}
		else
		{
			header("location:login.php?Invalid=Please enter correct username and password");
		}
	}
}
else
{
	echo "not Working";
}

?>
