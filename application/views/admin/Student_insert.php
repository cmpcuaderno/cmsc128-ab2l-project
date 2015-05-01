<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('admin') ?>" class="pure-menu-link navLink" id="logs">Logs</a>
		</li>
		
		<li class='active has-sub'><a href='#'><span>Add</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/do_register') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/add_form') ?>'><span>Student</span></a>
				</li>
			</ul>
		</li>
		
		<li class='active has-sub'><a href='#'><span>Update</span></a>
			<ul>
				<li class='last'><a href='#'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='#'><span>Student</span></a>
				</li>
			</ul>
		</li>

		<li class='active has-sub'><a href='#'><span>View</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/do_register') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/view_students') ?>'><span>Student</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/noOfGraduates') ?>'><span>Number of Graduates</span></a>
				</li>
			</ul>
		</li>

		<li class='active has-sub'><a href='#'><span>Delete</span></a>
			<ul>
				<li class='last'><a href='<?php echo site_url('admin/delAdviser') ?>'><span>Adviser</span></a>
				</li>
				<li class='last'><a href='<?php echo site_url('admin/delete') ?>'><span>Student</span></a>
				</li>
			</ul>
		</li>

	</ul>
</div>

<div class="body-panel">
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
                        <th>Given Name</th>
                        <td><input name="first_name" rows="5" cols="20"></td>
                        <th>Middle Name</th>
                        <td><input type="text" name="middle_name" size="20" /></td>
                  </tr>
                  <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="last_name" size="20" /></td>
                        <th>Student Number</th>
                        <td><input type="text" name="student_number" size="20" /></td>  
                  </tr>
                  <tr>
                        <th>Classification</th>
                        <td><input type="text" name="classification" size="20" /></td>
                        <th>Curriculum</th>
                        <td><input type="text" name="curriculum" size="20" /></td>
                  </tr>
                  <tr>
                        <th>Contact No.</th>
                        <td><input type="text" name="contact_number" size="20" /></td>
                        <th>E-mail Address</th>
                        <td><input type="text" name="email_address" size="20" /></td>
                  </tr>
                  <tr>
                        <th>College Address</th>
                        <td> <textarea name="college_address" rows="5" cols="25"></textarea></td>
                        <th>Home Address</th>
                        <td><textarea name="home_address" rows="5" cols="25"></textarea></td>
                  </tr>
                  <tr>
                        <th>Relative</th>
                        <td><input name="first_name" rows="5" cols="20"></td>
                        <th align="right" scope="row">&nbsp;</th>
                        <td><center><input type="submit" name="submit" value="Send" /></center></td>
                  </tr>
          </form>
</table>
</center>
</div>
</body>

</html>

