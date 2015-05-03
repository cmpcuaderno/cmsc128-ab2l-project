<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item pure-menu-selected">
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

<div class="body-panel">
	<center>
		<div>
			<?php  echo form_open('adviser/update/'. $adviser['employee_number']); ?>
			<form method="POST" action="#" class="mq-table">
					<table border="true" class="pure-table">
						<tr>
							<td>Specialization: </td>
							<td><textarea name="specialization" rows="5" cols="25"><?php echo $adviser['specialization'] ?></textarea></td>
						</tr>
					</table>
					<br><br>
				<button class="pure-button" type="submit">Update</button>
			</form>
		</div>
	</center>
</div>
<?php echo form_close() ;?>