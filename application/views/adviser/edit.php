<html>
	<head>
		<title>Edit Adviser Profile</title>
	</head>

	<?php $this->load->helper('form'); ?>
	<body>
		<h1>Edit Profile</h1>
		<hr>

		<?php  echo form_open('adviser/update/'. $adviser['employee_number']); ?>

		<label for="last_name"> Last name: </label>
		<input type="input" name="last_name" value="<?php echo $adviser['last_name'] ?>"/>

		<label for="first_name"> First name: </label>
		<input type="input" name="first_name" value="<?php echo $adviser['first_name'] ?>"/>

		<label for="middle_name"> Middle name: </label>
		<input type="input" name="middle_name" value="<?php echo $adviser['middle_name'] ?>"/>

		<br>
		<label for="level"> Academic Rank: </label>
		<input type="text" name="level" value="<?php echo $adviser['level'] ?>"/>
		<br>
		<label for="specialization"> Specialization: </label>
		<textarea name="specialization"><?php echo $adviser['specialization'] ?></textarea>
		<br>


		<input type="submit" name="submit" value="Update Profile"/>

		<?php echo form_close() ;?>
 	</body>
</html>