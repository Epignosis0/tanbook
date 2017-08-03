<?php if(isset($_SESSION['logged_in']) ) header("location:home.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>tanbook</title>
</head>
<body>
<br>
<div>
	<h2>Login Form</h2>
	<form method="post" action="login_entry.php">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>
</div>

<br/>
<hr>
<br/>

<div>
	<h2>Register Form</h2>

	<form method="post" action="register_entry.php">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>