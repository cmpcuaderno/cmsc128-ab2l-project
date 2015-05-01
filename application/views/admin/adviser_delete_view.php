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
	<div>
		<?php echo form_open('admin/delAdviser/'); ?>
		<form method="POST">
		Adviser to Delete:
		<input type = "text" name="employee_number" id="enum" placeholder="Insert Employee Number">
		<button type = "submit">Delete</button>
		</form>
	</div>

	<div>
		
	</div>
</body>