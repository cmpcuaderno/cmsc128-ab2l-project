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
				<li class='last'><a href='<?php echo site_url('admin/view_advisers') ?>'><span>Adviser</span></a>
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

    <body>
        <div class="container">
            <?php $this->load->helper("form"); echo form_open("admin/do_register"); ?>
                <label for="username">User Name</label>
                    <input type="text" name="username"/>
                <label for="password">Password</label>
                    <input type="password" name="password"/>
                <label for="employee_number">Employee Number</label>
                    <input type="text" name="employee_number"/>
                <label for="first_name">First Name</label>
                    <input type="text" name="first_name"/>
                <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name"/>
                <label for="last_name">Last Name</label>
                    <input type="text" name="last_name"/>
                <label for="specialization">Specialization</label>
                    <input type="text" name="specialization"/>
                <label for="level">Level</label>
                    <input type="text" name="level"/>
                <input type="submit" value="Sign up" name="register"/>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
