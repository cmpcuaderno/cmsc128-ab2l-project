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
			<table class="mq-table pure-table-bordered pure-table admintable">
				<thead>
					<tr>
						<th class="highlight">Username</th>
						<th class="highlight">Time in</th>
						<th class="highlight">Activity</th>
					</tr>
				</thead>
				<tbody>
					<tr class="pure-table-odd">
						<td class="highlight">aidz</td>
						<td class="highlight">09:44:23 AM</td>
						<td class="highlight">Logged out.</td>
					</tr>
					<tr>
						<td class="highlight">aidz</td>
						<td class="highlight">07:12:03 AM</td>
						<td class="highlight">Changed adviser of Juan dela Cruz</td>
					</tr>
					<tr class="pure-table-odd">
						<td class="highlight">aidz</td>
						<td class="highlight">07:02:18 AM</td>
						<td class="highlight">Logged in.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="add container admintable">
            <?php $this->load->helper("form"); echo form_open("admin/do_register"); ?>
                <label for="username">User Name</label>
                    <input type="text" name="username"/><br>
                <label for="password">Password</label>
                    <input type="password" name="password"/><br>
                <label for="employee_number">Employee Number</label>
                    <input type="text" name="employee_number"/><br>
                <label for="first_name">First Name</label>
                    <input type="text" name="first_name"/><br>
                <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name"/><br>
                <label for="last_name">Last Name</label>
                    <input type="text" name="last_name"/><br>
                <label for="specialization">Specialization</label>
                    <input type="text" name="specialization"/><br>
                <label for="level">Level</label>
                    <input type="text" name="level"/><br>
                <input type="submit" value="Sign up" name="register"/>
            <?php echo form_close(); ?>
		</div>
		<div class="update container admintable">
			UPDATE
		</div>
		<div class="view container admintable">
			VIEW
		</div>
		<div class="delete container admintable">
			DELETE
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