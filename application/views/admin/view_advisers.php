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

<center>
	<div class="body-panel pure-u-2-5 tableClass">
		<table id="table" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th scope="col">Employee Number</th>
					<th scope="col">User Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">First Name</th>
					<th scope="col">Middle Name</th>
					<th scope="col">Specialization</th>
					<th scope="col">Level</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
			if (isset($list['advisers'])){
				foreach ($list['advisers'] as $log){
					echo '<tr>';
					echo '<td>' . $log->employee_number . '</td>';
					echo '<td>' . $log->username . '</td>';
					echo '<td>' . $log->last_name . '</td>';
					echo '<td>' . $log->first_name . '</td>';
					echo '<td>' . $log->middle_name . '</td>';
					echo '<td>' . $log->specialization . '</td>';
					echo '<td>' . $log->level . '</td>';
					echo '<td> <a href="edit_adviser_details/' . $log->employee_number . '">Edit<a><br><a href="confirmed_delete_adviser/' . $log->employee_number . '">Delete<a></td>';
					echo '</tr>';
				}
			} else {
				echo "No advisers registered.";
			}
			?>
			</tbody>
		</table>
	</div>
</center>