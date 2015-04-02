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
			<h3>Student's Grades</h3>
			<a href="<?php echo site_url('student/') ?>"><button type="button">View Student Profile</button></a>
			<button type="button">Log out</button>
		</div>


		<br><br><br>

		<div class="body-panel">
		<center>
			<svg width="812" height="800">
				<!-- semester header -->
				<rect width="810" height="65" stroke-width="1" stroke="black" fill="yellow" y="1" x="1"  rx="5" ry="5"/>
				<text x="300" y="35" fill="black" font-family="serif" font-size="20">1st semester A.Y. 2012-2013</text>
				<!-- subjects header -->
				<rect width="120" height="65" stroke-width="1" stroke="black" fill="yellow" y="70" x="1"  rx="5" ry="5"/>
				<text x="30" y="108" fill="black" font-family="serif" font-size="20">Math 17</text>
				<rect width="120" height="65" stroke-width="1" stroke="black" fill="yellow" y="70" x="140"  rx="5" ry="5"/>
				<text x="153" y="108" fill="black" font-family="serif" font-size="20">ENG 1(AH)</text>
				<!-- grades header -->
				<!-- if browser does not support svg -->
				Sorry, your browser does not support inline SVG.
			</svg>
		</center>
		</div>

	</body>
</html>
