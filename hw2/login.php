<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\hw2\style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="post">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="user"/>
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass"/>
			</p>
			<p>
				<input type="submit" id="btn" value="Login"/>
			</p>
		</form>
	</div>

</body>
</html>