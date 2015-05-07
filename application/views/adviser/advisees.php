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

<center>
<div class="body-panel pure-u-2-5 tableClass">
	<center>
		<table id="table" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th> Student Number </th>
						<th> Student Name </th>
						<th> Handled Since </th>
						<th> Handled Until </th>
					</tr>
				</thead>
				<?php
					foreach($advisees as $row){
						 echo "<tr>";
						 echo "<td>".$row['student_number']."</td>\n";
						 echo "<td><a href=\"view_advisee/" . $row['student_number'] . "\">" .$row['last_name'] . ", " . $row['first_name'] ."</a></td>\n";
						 echo "<td>".$row['start_date']."</td>";
						 echo "<td>".$row['end_date']."</td>";
						 echo "</tr>";
					}
				?>
				</table>
	</center>
</div>
</center>