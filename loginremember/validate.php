<?php
$email1="stiveckamsh@gmail.com";
$password1="steve";
$username1="steve";

if (isset($_POST['login'])) 
{
   $email =$_POST['email'];
   $username = $_POST['username'];
   $password =$_POST['password'];

   if ($email==$email1 and $username == $username1 and $password ==$password1) 
   {
   	# code...
   	if (isset($_POST['remember'])) 
   	{
   		setcookie('email',$email ,time()+60+60+7);
   	}
   	session_start();
   	$_SESSION['email'] = $email;
   	header("location:welcome.php"); 
   }
   else
   {
   	echo "Invalid credentials <br> Click here to <a href ='login.php'>  try again</a>";
   }
}
else
{
	header("location:login.php");
}
?>