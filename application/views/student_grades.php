<?php 
	$this->load->helper('url');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<script src="http://studentadvisersystem/assets/jquery-1.11.1.min.js"></script>
		<script>
			$(document).ready(function(){
				//change cursor to pointer
				$('.toggle').hover(function(){
					$(this).css( 'cursor', 'pointer' );  
				});
				//set hide as default
				$($('#initHide')).hide();
			});
		</script>
		<title>Adviser-Student Records Management System</title>
	</head>

	<body>
		<div class="top-panel">
			<h1>Adviser-Student Records Management System</h1>
			<h3>View Student's Grades</h3>
			<a href="<?php echo site_url('student/') ?>"><button type="button">View Student profile</button></a>
			<a href="<?php echo site_url('student/grades') ?>"><button type="button">View grades</button></a>
			<a href="<?php echo site_url('student/update') ?>"><button type="button">Update Student profile</button></a>
			<button type="button">Log out</button>
		</div>


		<br><br><br>

		<div class="body-panel">
		<center>
			<svg width="822" height="500">
				<!-- semester header -->
				<rect width="820" height="65" stroke-width="1" stroke="black" fill="white" y="1" x="1"  rx="5" ry="5"/>
				<text x="300" y="40" fill="black" font-family="serif" font-size="20">1st semester A.Y. 2012-2013</text>
				
					<!-- subjects header -->
					<rect id="initHide" width="120" height="65" stroke-width="1" stroke="black" fill="white" y="70" x="1"  rx="5" ry="5"/>
					<text id="initHide"  x="20" y="108" fill="black" font-family="serif" font-size="20">MATH 17</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="70" x="140"  rx="5" ry="5"/>
					<text id="initHide" x="151" y="108" fill="black" font-family="serif" font-size="20">ENG 1(AH)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="70" x="280"  rx="5" ry="5"/>
					<text id="initHide"  x="303" y="108" fill="black" font-family="serif" font-size="20">GE (SSP)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="70" x="420"  rx="5" ry="5"/>
					<text id="initHide"  x="443" y="108" fill="black" font-family="serif" font-size="20">GE (SSP)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="70" x="560"  rx="5" ry="5"/>
					<text id="initHide"  x="578" y="108" fill="black" font-family="serif" font-size="20">GE (MST)</text>
					<rect id="initHide"  width="120" height="65" stroke-width="1" stroke="black" fill="white" y="70" x="701"  rx="5" ry="5"/>
					<text id="initHide"  x="738" y="108" fill="black" font-family="serif" font-size="20">PE 1</text>
					<!-- grades header -->
				

				<!-- semester header -->
				<rect width="820" height="65" stroke-width="1" stroke="black" fill="white" y="150" x="1"  rx="5" ry="5"/>
				<text x="300" y="190" fill="black" font-family="serif" font-size="20">2nd semester A.Y. 2012-2013</text>
				
					<!-- subjects header -->
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="220" x="1"  rx="5" ry="5"/>
					<text x="25" y="258" fill="black" font-family="serif" font-size="20">CMSC 2</text>
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="220" x="140"  rx="5" ry="5"/>
					<text x="160" y="258" fill="black" font-family="serif" font-size="20">CMSC 11</text>
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="220" x="280"  rx="5" ry="5"/>
					<text x="298" y="258" fill="black" font-family="serif" font-size="20">CMSC 56</text>
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="220" x="420"  rx="5" ry="5"/>
					<text x="438" y="258" fill="black" font-family="serif" font-size="20">MATH 26</text>
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="220" x="560"  rx="5" ry="5"/>
					<text x="593" y="258" fill="black" font-family="serif" font-size="20">ENG 2</text>
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="220" x="701"  rx="5" ry="5"/>
					<text x="720" y="258" fill="black" font-family="serif" font-size="20">GE (MST)</text>
					<rect width="120" height="65" stroke-width="1" stroke="black" fill="white" y="290" x="1"  rx="5" ry="5"/>
					<text x="38" y="328" fill="black" font-family="serif" font-size="20">PE 2</text>
					<!-- grades header -->
				


				<!-- if browser does not support svg -->
				Sorry, your browser does not support inline SVG.
			</svg>
		</center>
		</div>

	</body>
</html>
