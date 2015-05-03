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

<div class="body-panel">
    <center>
      <table class="pure-table">
          <form class="pure-table" method="post" action="insert_subject">
			<tr>
				<th width="213" align="right" scope="row">Student Number </th>
				<td width="161"><input type="text" name="student_number" size="20" /></td>
			</tr>
                   <tr>
		<th align="right" scope="row">Course Code </th>
		<td><input type="text" name="course_code" size="20" /></td>
            </tr>

            <tr>
		<th align="right" scope="row">Year Taken </th>
		<td><input type="text" name="year_taken" size="20" /></td>
            </tr>

            <tr>
		<th width="213" align="right" scope="row">Term Taken </th>
		<td width="161"><input type="text" name="term_taken" size="20" /></td>
            </tr>
            
            <tr>
		<th align="right" scope="row">Final Grade </th>
                <td width="161"><input type="text" name="final_grade" size="20" /></td>
            </tr>

            <tr>
                <td colspan="2"><center><input class="pure-button" type="submit" name="submit" value="Add subject" /></center></td>
            </tr>
			</tbody>
		</table>
	
	</div>
</center>