<html>
	<head>
		<title>
			Adviser Profile
		</title>
	</head>
	<a href=edit>Edit your profile</a>

	<body>
		<h1>Adviser Profile </h1>
		<hr>
		<b> Name: </b><?php echo $adviser['last_name'] .", ".$adviser['first_name'] . " " .$adviser['middle_name']?>
		<br>
		<b> Employee Number: </b> <?php echo $adviser['employee_number']?>
		<br>
		<b> Academic Rank: </b> <?php echo $adviser['level'] ?>
		<br>
		<b> Specialization: </b> <?php echo $adviser['specialization'] ?>
	</body>
</html>
