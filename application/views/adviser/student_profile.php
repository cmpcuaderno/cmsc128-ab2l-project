<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/edit') ?>" class="pure-menu-link navLink" id="update">Update Specialization</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/change_password') ?>" class="pure-menu-link navLink" id="logs">Change Password</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/grad_advisees') ?>" class="pure-menu-link navLink" id="logs">View Graduate Advisees</a>
		</li>

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('adviser/advisees') ?>" class="pure-menu-link navLink" id="logs">View Advisees</a>
		</li>
	</ul>
</div>

<div class="table-responsive logs container studentprofile">
	<div class="body-panel">
	<center>
		<a href="<?php echo site_url('adviser/view_advisee/'.$student['student_number'].'') ?>" class="pure-button">Student Profile</a>
		<a href="<?php echo site_url('adviser/grades/'.$student['student_number'].'') ?>" class="pure-button">Student Grades</a>
		<a href="<?php echo site_url('adviser/advisees') ?>" class="pure-button">Back to list</a>
	</center>
	<br><br>
		<center>
			<table border="true" class="mq-table pure-table-bordered pure-table">
				<tr>
						<td>Name: </td>
						<td><?php echo $student['last_name'].','. $student['first_name'].' '.$student['middle_name']?></td>
					</tr>
					<tr>
						<td>Student Number: </td>
						<td><?php echo $student['student_number']?></td>
					</tr>
					<tr>
						<td>Classification: </td>
						<td><?php echo $student['classification'] ?></td>
					</tr>
					<tr>
						<td>Curriculum: </td>
						<td><?php echo $student['curriculum'] ?></td>
					</tr>
					<tr>
						<td>Contact Number: </td>
						<td><?php echo $student['contact_number'] ?></td>
					</tr>
					<tr>
						<td>E-mail Address: </td>
						<td><?php echo $student['email_address'] ?></td>
					</tr>
					<tr>
						<td>College Address: </td>
						<td><?php echo $student['college_address'] ?></td>
					</tr>
					<tr>
						<td>Home Address: </td>
						<td><?php echo $student['home_address'] ?></td>
					</tr>
					<tr>
						<td>Member since: </td>
						<td>2010</td>
					</tr>
			</table>
		</center>
	</div>
</div>