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
     
     <form method="post" action="search_student_keyword">
	<input type="text" name="search_keyword" size="20" />
	<input type="submit" name="submit" value="Search" />
     </form>
    
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
            <th scope="col" colspan="2">Action</th>
        </tr>

        <?php foreach ($user_list as $u_key){ ?>

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
            
            <td witdth="40" align="left"><a href="#" onClick="show_confirm('edit', '<?php echo $u_key->student_number; ?>')">Edit</a></td>
            <td witdth="40" align="left"><a href="#" onClick="show_confirm('delete', '<?php echo $u_key->student_number; ?>')">Delete</a></td>
            
        </tr>

        <?php }?>

    </table>
