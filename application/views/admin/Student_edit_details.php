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
			<?php foreach($student as $s) : ?>
				<form method="POST" action="<?php echo base_url();?>index.php/admin/confirmed_edit_student" class="mq-table">
					<table border="true" class="pure-table">
						<tr>
							<td>Name: </td>
							<td><input type="hidden" name="student_number" value="<?php echo $s->student_number ?>">
							<input type="hidden" name="username" value="<?php echo $s->username ?>">
							<input type="hidden" name="password" value="<?php echo $s->password ?>">
							<input type="text" name="last_name" value="<?php echo $s->last_name ?>">
							<input type="text" name="first_name" value="<?php echo $s->first_name ?>">
							<input type="text" name="middle_name" value="<?php echo $s->middle_name ?>"></td>
						</tr>
						<tr>
							<td>Classification: </td>
							<td><input class="pure-input" type="text" name="classification" value="<?php echo $s->classification ?>"></td>
						</tr>
						<tr>
							<td>Curriculum: </td>
							<td><input class="pure-input" type="text" name="curriculum" value="<?php echo $s->curriculum ?>"></td>
						</tr>
						
						<tr>
							<td>Contact Number: </td>
							<td><input class="pure-input" type="text" name="contact_number" value="<?php echo $s->contact_number ?>"></td>
						</tr>
						
						<tr>
							<td>Email Address: </td>
							<td><input class="pure-input" type="text" name="email_address" value="<?php echo $s->email_address ?>"></td>
						</tr>
						
						<tr>
							<td>College Address: </td>
							<td><input class="pure-input" type="text" name="college_address" value="<?php echo $s->college_address ?>"></td>
						</tr>
						
						<tr>
							<td>Home Address: </td>
							<td><input class="pure-input" type="text" name="home_address" value="<?php echo $s->home_address ?>"></td>
						</tr>
						
						<tr>
							<td>Relative: </td>
							<td><input class="pure-input" type="text" name="relative" value="<?php echo $s->relative ?>"></td>
						</tr>
					</table>
					<br><br>
					<button class="pure-button" type="submit">Update</button>
				</form>
			<?php endforeach; ?>
	</center>
</div>