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
	<?php $this->load->helper("form"); echo form_open("admin/do_register"); ?>
    <center>
      <table class="pure-table">
          <form method="post" action="insert_new_student" class="pure-form">
                  <tr>
                        <th>Username</th>
                        <td><input type="text" name="username" size="20" /></td>
                        <th>Password</th>
                        <td><input type="password" name="password" size="20" /></td>
                  </tr>
                  <tr>
                        <th>First Name</th>
                        <td><input name="first_name" rows="5" cols="20"></td>
                        <th>Middle Name</th>
                        <td><input type="text" name="middle_name" size="20" /></td>
                  </tr>
                  <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="last_name" size="20" /></td>
                        <th>Employee Number</th>
                        <td><input type="text" name="employee_number" size="20" /></td>  
                  </tr>
                  <tr>
                        <th>Specialization</th>
                        <td><input type="text" name="specialization" size="20" /></td>
                        <th>Level</th>
                        <td><input type="text" name="level" size="20" /></td>
                  </tr>   
            <?php echo form_close(); ?>
			</tbody>
		</table>
		<br><input class="pure-button" type="submit" value="Add adviser" name="register"/>
	</div>
</center>