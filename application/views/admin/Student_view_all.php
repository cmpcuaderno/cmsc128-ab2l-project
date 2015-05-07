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

     <head>
        <script type="text/javascript">
            function show_confirm(act, gotoid){
                if(act == "edit")
                    var r = confirm("Do you really want to edit?");
                    
                else
                    var r = confirm("Do you really want to delete?");
                    
                if(r == true){
                    window.location = "<?php echo base_url();?>index.php/admin/"+act+"/"+gotoid;
                }
            }
        </script>
     </head>
    
<center>
<div class="body-panel pure-u-2-5 tableClass">
	<center>
		<table id="table" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th class="highlight" scope="col">Student Number</th>
					<th class="highlight" scope="col">User Name</th>
					<th class="highlight" scope="col">Name</th>
					<th class="highlight" scope="col">Classification</th>
					<th class="highlight" scope="col">Curriculum</th>
					<th class="highlight" scope="col">Contact Number</th>
					<th class="highlight" scope="col">Email Address</th>
					<th class="highlight" scope="col">College Address</th>
					<th class="highlight" scope="col">Home Address</th>
					<th class="highlight" scope="col">Relative</th>
					<th class="highlight" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				
			

        <?php foreach ($user_list as $u_key){
			echo '<tr>';
			echo '<td>' . $u_key->student_number . '</td>';
			echo '<td>' . $u_key->username . '</td>';
			echo '<td>' . $u_key->first_name." ".$u_key->middle_name." ". $u_key->last_name.'</td>';
			
			echo '<td>' . $u_key->classification . '</td>';
			echo '<td>' . $u_key->curriculum . '</td>';
			echo '<td>' . $u_key->contact_number . '</td>';
			echo '<td>' . $u_key->email_address . '</td>';
			echo '<td>' . $u_key->college_address . '</td>';
			echo '<td>' . $u_key->home_address . '</td>';
			echo '<td>' . $u_key->relative . '</td>';
			echo '<td><a href="edit_student_details/' . $u_key->student_number . '">Edit</a><br><a href="confirmed_delete_student/' . $u_key->student_number . '">Delete<a></td>';
			echo '</tr>';

        } ?>
		
			
			</tbody>
		</table>
	</center>
</div>
</center>