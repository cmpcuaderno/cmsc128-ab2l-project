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
				<h3>Update Student Profile</h3>
				<a href="<?php echo site_url('student/') ?>"><button type="button">View Student profile</button></a>
				<a href="<?php echo site_url('student/grades') ?>"><button type="button">View grades</button></a>
				<a href="<?php echo site_url('student/update') ?>"><button type="button">Update Student profile</button></a>
				<button type="button">Log out</button>
			</div>

			<br><br><br>

			<div class="body-panel">
				
				
				<?php 	
					echo form_open('student/update_student');
					foreach($student as $stud) : ?>
				<form method="POST" action="#" >
                    <table border="true">
                    <tr>	
						<td>Name: </td>
						<td><input type="hidden" name="username" value="<?php echo $stud->username ?>">
                       		<input type="hidden" name="password" value="<?php echo $stud->password ?>">
                        	<input type="text" name="last_name" value="<?php echo $stud->last_name ?>">
                            <input type="text" name="first_name" value="<?php echo $stud->first_name ?>">
                            <input type="text" name="middle_name" value="<?php echo $stud->middle_name ?>"></td>
					</tr>
					<tr>	
						<td>Student Number: </td>
						<td><input type="text" name="student_number" value="<?php echo $stud->student_number ?>"></td>
					</tr>
					<tr>	
						<td>Classification: </td>
						<td><input type="text" name="classification" value="<?php echo $stud->classification ?>"></td>
					</tr>
					<tr>	
						<td>Curriculum: </td>
						<td><input type="text" name="curriculum" value="<?php echo $stud->curriculum ?>"></td>
					</tr>
					<tr>	
						<td>Contact Number: </td>
						<td><input type="text" name="contact_number" value="<?php echo $stud->contact_number ?>"></td>
					</tr>
					<tr>	
						<td>E-mail Address: </td>
						<td><input type="text" name="email_address" value="<?php echo $stud->email_address ?>"></td>
					</tr>
					<tr>	
						<td>College Address: </td>
						<td><input type="text" name="college_address" value="<?php echo $stud->college_address ?>"></td>
					</tr>
					<tr>	
						<td>Home Address: </td>
						<td><input type="text" name="home_address" value="<?php echo $stud->home_address ?>"></td>
					</tr>
                    
                  
				</table>
                <button type="submit">Update</button>
                  </form>
                  <?php endforeach; ?>
			
			</div>
	</body>
</html>
