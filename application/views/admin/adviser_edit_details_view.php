<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('admin') ?>" class="pure-menu-link navLink" id="logs">Logs</a>
		</li>
		
		<li class='active has-sub'><a href='#'><span>Add</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/register') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/add_form') ?>'><span>Student</span></a>
				</li>
			</ul>
		</li>

		<li class='active has-sub'><a href='#'><span>View</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/view_advisers') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/view_students') ?>'><span>Student</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/noOfGraduates') ?>'><span>Number of Graduates</span></a>
				</li>
			</ul>
		</li>
		
		<li class='active has-sub'><a href='#'><span>Student's Subjects</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/add_subject') ?>'><span>Add Subject</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/edit_subject') ?>'><span>Edit Subject</span></a>
				</li>
			</ul>
		</li>

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('admin/change_adviser') ?>" class="pure-menu-link navLink" id="logs">Change Adviser</a>
		</li>
		
	</ul>
</div>

<div>
	<center>
			<?php foreach($adviser as $ad) : ?>
				<form method="POST" action="<?php echo base_url();?>index.php/admin/confirmed_edit_adviser" class="mq-table">
					<table border="true" class="pure-table">
						<tr>
							<td>Name: </td>
							<td><input type="hidden" name="employee_number" value="<?php echo $ad->employee_number ?>">
							<input type="text" name="last_name" value="<?php echo $ad->last_name ?>">
							<input type="text" name="first_name" value="<?php echo $ad->first_name ?>">
							<input type="text" name="middle_name" value="<?php echo $ad->middle_name ?>"></td>
						</tr>
						<tr>
							<td>Specialization: </td>
							<td><input class="pure-input" type="text" name="specialization" value="<?php echo $ad->specialization ?>"></td>
						</tr>
						<tr>
							<td>Level: </td>
							<td><input class="pure-input" type="text" name="level" value="<?php echo $ad->level ?>"></td>
						</tr>
					</table>
					<br><br>
					<button class="pure-button" type="submit">Update</button>
				</form>
			<?php endforeach; ?>
	</center>
</div>