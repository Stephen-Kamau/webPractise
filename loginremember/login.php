<!DOCTYPE html>
<html>
<head>
	<title>Remember me login page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<table cellpadding="5" cellspacing="10" align="center">
	<h2>
		login form with remember me
	</h2>
	<form action="validate.php" method="POST">
		<tr><th>Email:</th><td><input type="text" name="email" placeholder="Enter your email"></td></tr>
		<tr><th>Username:</th><td><input type="text" name="username" placeholder="enter your username"></td></tr>
		<tr><th>password:</th><td><input type="password" name="password" placeholder="enter your password"></td></tr>
		<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
		<tr><td colspan="2" align="right"><input type="submit" name="login" value="login"></td></tr>

	</form>
</table>
</body>
</html>