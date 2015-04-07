<?php
/*
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="StudentAdviserRecord"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$con = mysqli_connect($host, $username, $password, $db_name);
				 if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  }

// username and password of the student account
$myusername="student1"; 		//change this to the value acquired from the login 
$mypassword="student1";			//$_POST['password']


$result = mysqli_query($con, "SELECT * FROM student WHERE username='$myusername' and password='$mypassword' "); 
$row = mysqli_fetch_array($result);	
*/

?>

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
