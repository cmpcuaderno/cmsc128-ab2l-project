<div class="pure-menu adminnav">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item">
			<a href="<?php echo site_url('student/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item pure-menu">
			<a href="<?php echo site_url('student/grades') ?>" class="pure-menu-link navLink" id="add">View Grades</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('student/update') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
		</li>

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('student/search') ?>" class="pure-menu-link navLink" id="update">Search Adviser</a>
		</li>

	</ul>
</div>


<div class="body-panel">
	<center>
		<?php
		if($query->num_rows()>0){
			echo "Result: ".$query->num_rows()." matched your query.<br><br>";
			foreach($query->result() as $row ):
		?>
		<table border="true" class="pure-table">
			<tr>
				<td>Name: </td>
				<td> <?php echo $row->first_name." ".$row->middle_name." ".$row->last_name; ?></td
			</tr>
			<tr>
				<td>Level: </td>
				<td><?php echo $row->level; ?></td>
			</tr>
			<tr>
				<td>Specialization: </td>
				<td><?php echo $row->specialization; ?></td>
			</tr>
		</table>
		<br>
		<?php
			endforeach;
		}
		else echo "Result: No match found.";
	?>
	</center>
</div>

