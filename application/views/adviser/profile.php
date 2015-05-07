<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item pure-menu-selected">
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

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/advisees') ?>" class="pure-menu-link navLink" id="logs">View Advisees</a>
		</li>
	</ul>
</div>

<div class="table-responsive logs container studentprofile">
	<div class="body-panel">
		<center>

				<?php
					if(isset($error)) {
						foreach($error as $e) {
						echo "<h2>" . $e . "</h2>";
						}
					}
				?>
			<br>

			<img src="<?php echo base_url("/". $adviser['picture'] ) ?>"/>
			<br>
			<!-- photo and upload button-->
			<?php
				echo form_open_multipart('adviser/do_upload');
				echo "<input type='file' name='userfile' size='20'/>";
				echo "<input type='submit' name='submit' class='pure-button' value='Upload'/>";
				echo "</form>";
			 ?>
			 <br>
			<table border="true" class="mq-table pure-table-bordered pure-table">
				<tr>
					<td>Name: </td>
					<td><?php echo $adviser['last_name'] .", ".$adviser['first_name'] . " " .$adviser['middle_name']?></td>
				</tr>
				<tr>
					<td>Employee Number: </td>
					<td><?php echo $adviser['employee_number']?></td>
				</tr>
				<tr>
					<td>Academic Rank: </td>
					<td><?php echo $adviser['level'] ?></td>
				</tr>
				<tr>
					<td>Specialization: </td>
					<td><?php echo $adviser['specialization'] ?></td>
				</tr>
			</table>
		</center>
	</div>
</div>