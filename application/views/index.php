<?php

	session_start();

	if (isset($_POST["submit"])){
		$username=$_POST["uLogin"];
		$password=$_POST["uPassword"];	
	
		$con = mysqli_connect("localhost", "root", "", "StudentAdviserRecord");
		if(mysqli_connect_error()) echo "Connection Fail";
		else {
			$username = filter_var($_POST["uLogin"] , FILTER_SANITIZE_STRING);
			$password = sha1(filter_var($_POST["uPassword"] , FILTER_SANITIZE_STRING));
			
			$sql = "SELECT * FROM administrator WHERE username='$username' AND password='$password'";

			$results = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($results) != 1){
				die('<head><title>Log in failed</title></head><body><div id="container"><h2>Log in Failed</h2><h4>Invalid Username/Password</h4></div></body>');
                        }
                }
	}
?>

<!DOCTYPE html>

<html lang="en">
   
	<head>
		<meta charset="utf-8" />
		<title>Adviser-Student Records Management System</title>
	</head>
	
	<body>
		<form name="login" action="home.php" method="post">
			<input type="text" name="username" id="uLogin" maxlength="20" pattern="^[A-Za-z0-9]*$" placeholder="Username" required>
                        <input type="password" name="password" id="uPassword" maxlength="20" pattern="^[\S]*$" placeholder="Password" required>
                        <input type="submit" value="LOG IN" class="button">
		</form>
	</body>
</html>