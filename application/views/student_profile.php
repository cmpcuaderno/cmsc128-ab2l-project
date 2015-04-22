<?php 
	$this->load->helper('url');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Adviser-Student Records Management System</title>
	
	</head>
	
	<body>
			<div class="top-panel">
				<h1>Adviser-Student Records Management System</h1>
				<h3>Student's Profile</h3>
				<a href="<?php echo site_url('student/') ?>"><button type="button">View Student profile</button></a>
				<a href="<?php echo site_url('student/grades') ?>"><button type="button">View grades</button></a>
				<a href="<?php echo site_url('student/update') ?>"><button type="button">Update Student profile</button></a>
				<button type="button">Log out</button>
			</div>

			<br><br><br>

			<div class="body-panel">
				
				<?php 	foreach($student as $stud) : ?>
				<table border="true">
					<tr>	
						<td>Name: </td>
						<td><?php echo $stud->last_name.','. $stud->first_name.' '.$stud->middle_name?></td>
					</tr>
					<tr>	
						<td>Student Number: </td>
						<td><?php echo $stud->student_number?></td>
					</tr>
					<tr>	
						<td>Classification: </td>
						<td><?php echo $stud->classification ?></td>
					</tr>
					<tr>	
						<td>Curriculum: </td>
						<td><?php echo $stud->curriculum ?></td>
					</tr>
					<tr>	
						<td>Contact Number: </td>
						<td><?php echo $stud->contact_number ?></td>
					</tr>
					<tr>	
						<td>E-mail Address: </td>
						<td><?php echo $stud->email_address ?></td>
					</tr>
					<tr>	
						<td>College Address: </td>
						<td><?php echo $stud->college_address ?></td>
					</tr>
					<tr>	
						<td>Home Address: </td>
						<td><?php echo $stud->home_address ?></td>
					</tr>
				</table>
			<?php endforeach; ?>
			</div>
	</body>
</html>
