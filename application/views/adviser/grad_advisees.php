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

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('adviser/grad_advisees') ?>" class="pure-menu-link navLink" id="logs">View Graduated Advisees</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/advisees') ?>" class="pure-menu-link navLink" id="logs">View Advisees</a>
		</li>
	</ul>
</div>

<div class="table-responsive logs container studentprofile">
	<div class="body-panel">
		<center>
			<table border="true" class="mq-table pure-table-bordered pure-table">
				<thead>
					<tr>
						<th> Student Number </th>
						<th> Student Name</th>
					</tr>
				</thead>
				<?php
					$var = 0;
					foreach($grad_advisees as $row){
						 echo "<tr>";
						 echo "<td>".$row['student_number']."</td>\n";
						 echo "<td><a href=\"view_advisee/" . $row['student_number'] . "\">" .$row['last_name'] . ", " . $row['first_name'] ."</a></td>\n";
						 echo "</tr>";
						 $var++;
					}
				?>
		</table>
		</center>

		<div>
		<?php echo "<label>Total Graduates: " . $var . "</label>"; ?>
		</div>
	</div>
</div>

