<div class="pure-menu adminnav">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('adviser/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/edit') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
		</li>

	</ul>
</div>

<div class="table-responsive logs container studentprofile">
	<div class="body-panel">
		<center>

			<img src="<?php echo base_url("/". $adviser['picture'] ) ?>"/>
			<br>
			<!-- photo and upload button-->
			<?php
				if(isset($error)) {
					foreach($error as $e) {
					echo $e;
					}
				}
				echo form_open_multipart('adviser/do_upload');
				echo "<input type='file' name='userfile' size='20'/>";
				echo "<input type='submit' name='submit' value='upload'/>";
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
				<tr>
					<td>Member since: </td>
					<td>2010</td>
				</tr>
			</table>
		</center>
	</div>
</div>