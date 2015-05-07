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
	<center>
		<table id="table" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="highlight">Username</th>
					<th class="highlight">Date and Time</th>
					<th class="highlight">Activity</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
			if (isset($table['logs'])){
				foreach ($table['logs'] as $log){
					echo '<tr>';
					echo '<td>' . $log->username . '</td>';
					echo '<td>' . $log->date_time . '</td>';
					echo '<td>' . $log->action . '</td>';
					echo '</tr>';
				}
			} else {
				echo "Logs not found.";
			}
			?>
			</tbody>
		</table>
	</center>
</div>
</center>