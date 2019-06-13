<?php include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<fieldset>
		<legend>USER LOGIN PAGE</legend>
		<form method="POST" action="user_login.php">
			<table>
				<tr><td><label>User Name</label></td></tr>
				<tr><td><input type="text" name="name" required></td></tr>
				<tr><td><label>Password</label></td></tr>
				<tr><td><input type="Password" name="pass" required></td></tr>
				<tr><td><button type="submit" name="submit">Login</button></td></tr>
			</table>
		</form>
	</fieldset>
</body>
</html>