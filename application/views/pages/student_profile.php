<!DOCTYPE HTML>
<html>
	<head>
		<title>Adviser-Student Records Management System</title>

	</head>

	<body>
			<div class="top-panel">
				<h1>Adviser-Student Records Management System</h1>
				<button type="button">Log out</button>
			</div>

			<br><br><br>

			<div class="body-panel">

				<!--<?php 	foreach($studentent as $student) : ?>-->
				<table border="true">
					 <tr>
						<td>Name: </td>
						<td><?php echo $student->last_name.','. $student->first_name.' '.$student->middle_name?></td>
					</tr>
					<tr>
						<td>Student Number: </td>
						<td><?php echo $student->student_number?></td>
					</tr>
					<tr>
						<td>Classification: </td>
						<td><?php echo $student->classification ?></td>
					</tr>
					<tr>
						<td>Curriculum: </td>
						<td><?php echo $student->curriculum ?></td>
					</tr>
					<tr>
						<td>Contact Number: </td>
						<td><?php echo $student->contact_number ?></td>
					</tr>
					<tr>
						<td>E-mail Address: </td>
						<td><?php echo $student->email_address ?></td>
					</tr>
					<tr>
						<td>College Address: </td>
						<td><?php echo $student->college_address ?></td>
					</tr>
					<tr>
						<td>Home Address: </td>
						<td><?php echo $student->home_address ?></td>
					</tr>
				</table>
				<!-- <?php endforeach; ?> -->
			</div>
	</body>
</html>
