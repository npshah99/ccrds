<?php 
	include('conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
</head>
<body>
	<div>
		<form method="post" action="reg.php">
			<h1>Student Data</h1>
			<input type="text" name="name" placeholder="Enter your name"> <br><br>
			<input type="text" name="email" placeholder="Enter your email"> <br><br>
			<input type="password" name="passwd" placeholder="Enter your password"> <br><br>

			<input type="submit" name="submit" value="Register">
		</form>
	</div>
</body>
</html>
