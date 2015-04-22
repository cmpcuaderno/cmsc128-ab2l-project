	<div class="adminprofile">
		<div class="pure-menu adminnav">
        <ul class="pure-menu-list custom-restricted-width">

			<li class="pure-menu-item pure-menu-selected">
                <a href="#" class="pure-menu-link navLink" id="logs">Logs</a>
            </li>

            <li class="pure-menu-item pure-menu">
                <a href="#" class="pure-menu-link navLink" id="add">Add</a>
            </li>

			<li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="update">Update</a>
            </li>

            <li class="pure-menu-item">
                <a href="#" class="pure-menu-link navLink" id="view">View</a>
            </li>

            <li class="pure-menu-item menu-item-divided">
                <a href="#" class="pure-menu-link navLink" id="delete">Delete</a>
            </li>

        </ul>
		</div>
		<div class="table-responsive logs container">
			<center>
				<table class="mq-table pure-table-bordered pure-table ">
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
							echo '<tr class="pure-table-odd">';
							echo '<td class="highlight">' . $log->username . '</td>';
							echo '<td class="highlight">' . $log->date_time . '</td>';
							echo '<td class="highlight">' . $log->action . '</td>';
							echo '</tr>';
						}
					} else {
						echo "logs not found.";
					}
                                        ?>
					</tbody>
				</table>
			</center>
		</div>
		<div class="add container">
			<center>
				<table border="true" class="pure-table">
				<?php $this->load->helper("form"); echo form_open("admin/do_register"); ?>
					<tr>
						<td>Username: </td>
						<td><input class="pure-input" type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input class="pure-input" type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>Employee Number: </td>
						<td><input class="pure-input" type="text" name="employee_number" value=""></td>
					</tr>
					<tr>
						<td>First Name:  </td>
						<td><input class="pure-input" type="text" name="first_name" value=""></td>
					</tr>
					<tr>
						<td>Middle Name: </td>
						<td><input class="pure-input" type="text" name="middle_name" value=""></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td><input class="pure-input" type="text" name="last_name" value=""></td>
					</tr>
					<tr>
						<td>Specialization: </td>
						<td><input class="pure-input" type="text" name="specialization" value=""></td>
					</tr>
					<tr>
						<td>Level: </td>
						<td><input class="pure-input" type="text" name="level" value=""></td>
					</tr>
	            <?php echo form_close(); ?>
	            </table>
	            <br><br>
	            <input type="submit" class="pure-button" value="Sign up" name="register"/>
            </center>
		</div>
		<div class="update container">
			<center>
				<table class="pure-table">
				<tr>
					<td>
						<a href="<?php echo site_url('student/update') ?>" class="pure-menu-link navLink" id="logs">Update Student Profile</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="<?php echo site_url('adviser/edit') ?>" class="pure-menu-link navLink" id="add">Update Adviser Profile</a>
					</td>
				</tr>
				</table>
            </center>
		</div>
		<div class="view container ">
			<center>
				<table class="pure-table">
					<tr>
						<td>
							<a href="<?php echo site_url('student') ?>" class="pure-menu-link navLink" id="logs">Student Profiles</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="<?php echo site_url('adviser') ?>" class="pure-menu-link navLink" id="add">Adviser Profiles</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="<?php echo site_url('admin/noOfGraduates') ?>" class="pure-menu-link navLink" id="add">Number of Graduates</a>
						</td>
					</tr>
				</table>
            </center>
		</div>
		<div class="delete container">
			<center>
				<table class="pure-table">
				<tr>
					<td>
						<a href="<?php echo site_url('student/search') ?>" class="pure-menu-link navLink" id="add">Search a user to delete</a>
					</td>
				</tr>
				</table>
            </center>
		</div>
	</div>

<script type="text/javascript">
  	$(document).ready(function(){
  		$(".container").hide();
  		$(".logs").show();

  		$(".navLink").click(function(){
  			var div = $(this).attr('id');

  			$(".container").hide();
  			$("."+div).show(300);
  		});
  	});
</script>