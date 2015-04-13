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
				<h3>Search Adviser</h3>
				<a href="<?php echo site_url('student/') ?>"><button type="button">View Student profile</button></a>
				<a href="<?php echo site_url('student/grades') ?>"><button type="button">View grades</button></a>
				<a href="<?php echo site_url('student/update') ?>"><button type="button">Update Student profile</button></a>
				<a href="<?php echo site_url('student/search_adviser') ?>"><button type="button">Search Adviser</button></a>
				<button type="button">Log out</button>
			</div>

			<br><br><br>

			<div class="body-panel">
				<h4>Type keyword to search</h4>
				<?php echo form_open('student/search_keyword'); ?>

				<input  type="text" size="30" name="keyword" placeholder="Enter name, level or specialization"/>

				<input type="submit" value="Begin"/>
				</form>
			</div>
	</body>
</html>
