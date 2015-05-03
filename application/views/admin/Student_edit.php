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
		<div>
			<form method="post" action="con_edit_adviser">
				<input type="text" name="search_keyword" size="20" />
				<input type="submit" name="submit" value="Search" />
			</form>
		</div>

		<div>
			<table width="600" border="1" cellpadding="5">
		
			<tr>
				<th scope="col">Student Number</th>
				<th scope="col">User Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">First Name</th>
				<th scope="col">Middle Name</th>
				<th scope="col">Classification</th>
				<th scope="col">Curriculum</th>
				<th scope="col">Contact Number</th>
				<th scope="col">Email Address</th>
				<th scope="col">College Address</th>
				<th scope="col">Home Address</th>
				<th scope="col">Relative</th>
			</tr>

			<?php 
			if (isset($list)){
			foreach ($list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->student_number; ?></td>
				<td><?php echo $u_key->username; ?></td>
				<td><?php echo $u_key->last_name; ?></td>
				<td><?php echo $u_key->first_name; ?></td>
				<td><?php echo $u_key->middle_name; ?></td>
				<td><?php echo $u_key->classification; ?></td>
				<td><?php echo $u_key->curriculum; ?></td>
				<td><?php echo $u_key->contact_number; ?></td>
				<td><?php echo $u_key->email_address; ?></td>
				<td><?php echo $u_key->college_address; ?></td>
				<td><?php echo $u_key->home_address; ?></td>
				<td><?php echo $u_key->relative; ?></td>
				<td witdth="40" align="left"><a href="Student_edit_details/<?php echo $u_key->employee_number; ?>">Edit</a></td>
			</tr>

			<?php }}?>

		</table>

		</div>
	</center>
</div>