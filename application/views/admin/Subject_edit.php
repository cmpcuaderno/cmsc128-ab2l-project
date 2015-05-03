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
			<form class="pure-form" method="post" action="con_edit_subject">
				<input class="pure-input"type="text" name="search_keyword" placeholder="Student Number" size="20" />
				<input class="pure-button"type="submit" name="submit" value="Search" />
			</form>
		</div>
		<br>
	<div>
		<table class="pure-table" width="600" border="1" cellpadding="5">
    
        <tr>
            <th scope="col">Student Number</th>
            <th scope="col">Course Code</th>
            <th scope="col">Year Taken</th>
            <th scope="col">Term Taken</th>
            <th scope="col">Final Grade</th>
        </tr>

        <?php 
        if (isset($list)){
        foreach ($list as $u_key){ ?>

        <tr>

            <td><?php echo $u_key->student_number; ?></td>
            <td><?php echo $u_key->course_code; ?></td>
            <td><?php echo $u_key->year_taken; ?></td>
            <td><?php echo $u_key->term_taken; ?></td>
            <td><?php echo $u_key->final_grade; ?></td>
            <td witdth="40" align="left"><a href="<?php echo site_url('admin/edit_subject_details') ?>/<?php echo $u_key->student_number?>">Edit</a></td>
        </tr>

        <?php }}?>

    </table>

	</div>
	</center>
</div>