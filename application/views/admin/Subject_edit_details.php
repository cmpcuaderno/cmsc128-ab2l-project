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
		<?php foreach($student as $s) { ?>
			<form method="POST" action="<?php echo base_url();?>index.php/admin/confirmed_edit_subject" class="mq-table">
				<table border="true" class="pure-table">
					<tr>
						<td>Course Code: </td>
						<td><input type="hidden" name="student_number" value="<?php echo $s->student_number ?>">
						<input type="text" name="course_code" value="<?php echo $s->course_code ?>">
					</tr>
					<tr>
						<td>Year Taken: </td>
						<td><input class="pure-input" type="text" name="year_taken" value="<?php echo $s->year_taken ?>"></td>
					</tr>
					<tr>
						<td>Term Taken: </td>
						<td><input class="pure-input" type="text" name="term_taken" value="<?php echo $s->term_taken ?>"></td>
					</tr>
					
					<tr>
						<td>Final Grade: </td>
						<td><input class="pure-input" type="text" name="final_grade" value="<?php echo $s->final_grade ?>"></td>
					</tr>
					
				</table>
				<br><br>
				<button class="pure-button" type="submit">Update</button>
			</form>
		<?php }?>
	</center>
</div>