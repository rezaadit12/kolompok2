
<?php
session_start();
if(isset($_SESSION['email'])){
    header("Location: submit.php");
    exit;
}
?>  



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login</h2>

	<form method="POST" action="submit.php">
		<label>Email:</label><br>
		<input type="email" name="email" required><br><br>
		<label>Password:</label><br>
		<input type="password" name="password" required><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
