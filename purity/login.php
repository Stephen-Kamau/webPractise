<?php
$server='localhost';
$user='stephen';
$pass='stiveckamash';
$db='login_info';
$conn=mysqli_connect($server,$user,$pass,$db);
if (!$conn)
{
    die('Connection Failed!:'.mysqli_connect_error());
}
   if(isset($_POST["login"]))
  
   {
     $pass = $_POST["password"];
   	 $pass2 = $_POST["password2"];
   	 $name = $_POST["name"];
   	 $email = $_POST["email"];
   	 $query = "INSERT into purity (password,password2,name,email) values('$pass', '$pass2', '$name' ,'$email')";
   	 if(mysqli_query($conn,$query))
   	 {
   	 	echo "you have registered well";
   	 }
   	 else
   	 {
   	 	echo "not good".mysql_error();
   	 }

   }
   
?>