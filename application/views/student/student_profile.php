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
		<center>
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
		</center>
	</div>
</div>