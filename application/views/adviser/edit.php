<div class="pure-menu adminnav">
	<ul class="pure-menu-list custom-restricted-width">
	  
		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('adviser/edit') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
		</li>
	  
	</ul>
</div>

<div class="body-panel">
	<center>
		<div>
			<?php  echo form_open('adviser/update/'. $adviser['employee_number']); ?>
			<form method="POST" action="#" class="mq-table pure-table-bordered pure-table">
					<table border="true">
						<tr>	
							<td>Last name: </td>
							<td><input class="pure-input" type="text" name="last_name" value="<?php echo $adviser['last_name'] ?>"></td>
						</tr>
						
						<tr>	
							<td>First name: </td>
							<td><input class="pure-input" type="text" name="first_name" value="<?php echo $adviser['first_name'] ?>"></td>
						</tr>
						
						<tr>	
							<td>Middle name: </td>
							<td><input class="pure-input" type="text" name="middle_name" value="<?php echo $adviser['middle_name'] ?>"></td>
						</tr>
						
						<tr>	
							<td>Academic Rank: </td>
							<td><input class="pure-input" type="text" name="level" value="<?php echo $adviser['level'] ?>"></td>
						</tr>
						
						<tr>	
							<td>Specialization: </td>
							<td><input class="pure-input" type="text" name="specialization" value="<?php echo $adviser['specialization'] ?>"></td>
						</tr>
	
					</table>
					<br><br>
				<button class="pure-button" type="submit">Update</button>
			</form>
		</div>
	</center>
</div>
<?php echo form_close() ;?>