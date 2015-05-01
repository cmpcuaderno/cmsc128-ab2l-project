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

		<li class="pure-menu-item">
			<a href="<?php echo site_url('student/change') ?>" class="pure-menu-link navLink" id="update">Change Password</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('student/search') ?>" class="pure-menu-link navLink" id="update">Search Adviser</a>
		</li>

	</ul>
</div>


	<div class="body-panel">
		<center>
			<?php 	foreach($subjects as $sub) : ?>
			<table border="true" class="mq-table pure-table-bordered pure-table">
				<caption>					
						<?php echo $sub->semester ?>					
				</caption>
				<tr>
					<td>
						<?php echo $sub->subject1 ?>
					</td>
					<td>
						<?php echo $sub->subject2 ?>
					</td>
					<td>
						<?php echo $sub->subject3 ?>
					</td>
					<td>
						<?php echo $sub->subject4 ?>
					</td>
					<td>
						<?php echo $sub->subject5 ?>
					</td>
					<td>
						<?php echo $sub->subject6 ?>
					</td>
					
				</tr>
				
			</table>
			<?php endforeach; ?>
		</center>
	</div>