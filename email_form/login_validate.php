<?php
//start session
session_start();
$error=Null;
//do connection
$server='localhost';
$user='stephen';
$password='stiveckamash';
$db='login_info';
$conn=mysqli_connect($server,$user,$password,$db);
if (!$conn)
{
	die('Connection Failed!:'.mysqli_connect_error());
}


#start querring
else
{    
    #login
	$name =$_POST['username'];
	$password = $_POST['password'];

	#user the database
	$select = "SELECT * FROM email_reg WHERE username = '$name' and password = '$password'";
	$result = mysqli_query($conn,$select);
	$num=mysqli_num_rows($result);
	 if ($num ==1)
	 {
	 	//header("location:.php");
	 	$_SESSION['username']=$name;
	 }
	 else
	 {  
	 	$error= "You have not regestresd yet";
	    header("location:regestration.php");	
	 }

}

?>