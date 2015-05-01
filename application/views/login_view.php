<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adviser-Student Records Management System</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/pure-release-0.6.0/pure-min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/design.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/pure-release-0.6.0/grids-responsive.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("dist/pure-release-0.6.0/forms-min.css"); ?>">
	<script src="<?php echo base_url("dist/jquery-2.1.1.min.js"); ?>"></script>

</head>

<body>
	<div class="header">
		<div class="pure-g">
			<!--<div class="pure-u-lg-7-8">
				<!<h1 class="heading">Adviser-Student Records Management System</h1>
			</div>-->
		</div>
	</div>
	<div class="logo_login">
		<img src="<?php echo base_url("dist/images/logo_login1.png"); ?>" class="pure-img">
	</div>
	<div class="container">
		<div class="userinput">
			<?php echo validation_errors(); ?>
			<?php echo form_open('verifylogin'); ?>
			<form class="pure-form pure-form-aligned pure-img fieldsetclass" name="login" action="home.php" method="post">
				<!--<fieldset>-->
					<center>

					<div class="pure-control-group">
						<label for="name"></label>
						<input class="pure-input-rounded" type="text" name="username" id="uLogin" maxlength="20" pattern="^[A-Za-z0-9]*$" placeholder="Username" required>
					</div>

					<div class="pure-control-group">
						<label for="password"></label>
						<input class="pure-input-rounded" type="password" name="password" id="uPassword" maxlength="20" pattern="^[\S]*$" placeholder="Password" required>
					</div></br>

					<div class="pure-control-group">
						<label>Sign in as: </label>
						<select name="table">
							<option selected value="administrator">Admin</option>
							<option value="adviser">Adviser</option>
							<option value="student">Student</option>
						</select>
					</div>
					
					<div class="pure-controls">
						<button type="submit" class="pure-button button-warning pure-input-rounded">LOG IN</button>
					</div>

					</center>
				<!--</fieldset>-->
			</form>
		</div>
		
	</div>
	<div class="mid">
	</div>
	<div class="footer">
	</div><div class="footer2">
	</div>

	
