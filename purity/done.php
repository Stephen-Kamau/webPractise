<?php
session_start();
$server='localhost';
$user='stephen';
$pass='stiveckamash';
$db='login_info';
$conn=mysqli_connect($server,$user,$pass,$db);
if (!$conn)
{
    die('Connection Failed!:'.mysqli_connect_error());
}
$un='';
$pw='';

if(isset($_POST["login"]))
{
	$un =$_POST['email'];
	$pw = $_POST['password'];

	#check if email found
	$query = "SELECT * FROM purity WHERE email = '$un'";
	
	//Query the db to return a record if found email
	$result = mysqli_query($conn, $query);
	
	//check the number of rows with the email from the login form
	$num=mysqli_num_rows($result);
	 if ($num ==1)
	 {
	 	//create an array for the row using assoc function 
	 	//the array is named found
	 	$found = mysqli_fetch_assoc($result);
	 	
	 	//password fronm the column named password from the databse
	 	$db_pass = $found['password'];
	 	
	 	//Verify password
	 	//pass_verify() is an php inbult function taking stored password and inputed password
	 	//so you can used pass_verify($pw,$db_pass)
	 	if($pw == $db_pass){
	 		echo "You have been logged in";
	 	}else{
	 		
	 		echo "Invalid Password";
	 	}
	 	
	 }
	}

?>

<!DOCTYPE html>
<html>
<head>
		

	<title>
		form filled already
	</title>
</head>
<body>
	<style >
		body
		{
			background-image: url(img1.jpg);
		}
		
			#pure
			{
				width: 600px;
				height: 440px;
				border-radius: 45px;
				background-color: #333;	
				color:white;
				border-top-right-radius: : 45px;
				border-top-left-radius: 45px;
			}
			.in:focus
			{outline: none;}
			.in
			{
				background: black;
				color:white;
				width: 400px;
				height: 34px;
				margin-top: 23px;
				padding-top: none;
			}
			hr{
				width: 400px;
			}
			#sub
			{
				background-color: #5f5;
				color:black;
				width: 200px;
			}
			h2
			{
				background-color: black;
				color:white;
				font-size: 40px;
			}
		</style>
	<center><h1>Try again
	confirm your application by filling in the following:</h1></center><br>
	<center>
	<div id="pure">
		<h2>apply now again:</h2>
	<form method="POST" action="">
		<p>
	<label>Email address:<br></label>
	<input type="email" name="email" required placeholder="email address" class="in" /><hr><br>
</p>

	<p>
		<label>password:</label><br>
	<input type="password" name="password" required placeholder="password" class="in" /><hr>
</p>

	<p><input type="submit" name="login" value="login" id="sub">
	</p>

</form>
</div>
</center>
	
</body>
</html>