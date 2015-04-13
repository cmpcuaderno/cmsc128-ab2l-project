	<div class="adminprofile">
		<div class="pure-menu adminnav">
        <ul class="pure-menu-list custom-restricted-width">
          
			<li class="pure-menu-item pure-menu-selected">
                <a href="<?php echo site_url('student/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
            </li>
		  
            <li class="pure-menu-item pure-menu">
                <a href="<?php echo site_url('student/grades') ?>" class="pure-menu-link navLink" id="add">View Grades</a>
            </li>
			
			<li class="pure-menu-item">
                <a href="<?php echo site_url('student/update') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
            </li>
          
        </ul>
		</div>
		<div class="table-responsive logs container studentprofile">
			<div class="body-panel">
				
				<?php 	foreach($student as $stud) : ?>
				<table border="true" class="mq-table pure-table-bordered pure-table">
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
		</div>
		<div class="add container admintable">
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
		</div>
		<div class="update container admintable">
			UPDATE
		</div>
	</div>

<script type="text/javascript">
  	$(document).ready(function(){
  		$(".container").hide();
  		$(".logs").show();

  		$(".navLink").click(function(){
  			var div = $(this).attr('id');

  			$(".container").hide();
  			$("."+div).show(300);
  		});
  	});
</script>