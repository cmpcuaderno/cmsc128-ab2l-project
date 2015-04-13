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
				<a href="<?php echo site_url('student/') ?>"><button type="button">View Student profile</button></a>
				<button type="button">Log out</button>
			</div>

			<br><br><br>

			<div class="body-panel">

				<?php
				if($query->num_rows()>0){
					echo "Result: ".$query->num_rows()." matched your query.<br><br>";
					foreach($query->result() as $row ):
				?>
				<table border="true">
					<tr>	
						<td>Name: </td>
						<td> <?php echo $row->first_name." ".$row->middle_name." ".$row->last_name; ?></td
					</tr>
					<tr>
						<td>Level: </td>
						<td><?php echo $row->level; ?></td>
					</tr>
					<tr>
						<td>Specialization: </td>
						<td><?php echo $row->specialization; ?></td>
					</tr>
				</table>
				<?php
					endforeach;
				}
				else echo "Result: No match found.";

				?>
			</div>
	</body>
</html>
