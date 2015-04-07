<html lang="en">
   
	<head>
		<meta charset="utf-8" />
		<title>Adviser-Student Records Management System</title>
	</head>
	
	<body>
            <?php echo validation_errors(); ?>
            <?php echo form_open('verifylogin'); ?>
		<form name="login" action="home.php" method="post">
			<input type="text" name="username" id="uLogin" maxlength="20" pattern="^[A-Za-z0-9]*$" placeholder="Username" required>
                        <input type="password" name="password" id="uPassword" maxlength="20" pattern="^[\S]*$" placeholder="Password" required>
                        <input type="submit" value="LOG IN" name="submit">
		</form>
	</body>
</html>