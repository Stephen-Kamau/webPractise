<?php
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
?>