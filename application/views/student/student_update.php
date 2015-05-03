<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

        <li class="pure-menu-item pure-menu-selected">
            <a href="<?php echo site_url('student/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
        </li>
      
        <li class="pure-menu-item pure-menu">
            <a href="<?php echo site_url('student/grades') ?>" class="pure-menu-link navLink" id="add">View Grades</a>
        </li>
        
        <li class="pure-menu-item">
            <a href="<?php echo site_url('student/update') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('student/change') ?>" class="pure-menu-link navLink" id="update">Change Password</a>
        </li>

        <li class="pure-menu-item">
            <a href="<?php echo site_url('student/adviser') ?>" class="pure-menu-link navLink" id="update">Search Adviser</a>
        </li>
         <li class="pure-menu-item">
            <a href="<?php echo site_url('student/student_adviser') ?>" class="pure-menu-link navLink" id="update">View Adviser</a>
        </li>

	</ul>
</div>

	<div class="body-panel">
		<center>
			<div>
				<div class="success">
			        <?php 
			        if(!is_null($message)){ 
			            echo $message."<br>";
			        } ?>
			    </div>

				<?php 	
					echo form_open('student/validate_student');
					foreach($student as $stud) : ?>
				<form method="POST" action="#" >
                    <table border="true" class="mq-table pure-table-bordered pure-table">
                    <tr>	
						<td>Name: </td>
						<td>
                        	<?php echo $stud->last_name.", ".$stud->first_name." ".$stud->middle_name ?>
                        </td>
					</tr>
					<tr>	
						<td>Student Number: </td>
						<td><?php echo $stud->student_number ?></td>
					</tr>
					<tr>	
						<td>Classification: </td>
						<td><?php echo $stud->classification ?></td>
					</tr>
					<tr>	
						<td>Curriculum: </td>
						<td><?php echo $stud->curriculum ?></td>
					</tr>
					<tr>	
						<td>Contact Number: </td>
						<td>
							<input type="text" name="contact_number" value="<?php echo $stud->contact_number ?>">
							<?php echo form_error('contact_number');  ?>
						</td>
					</tr>
					<tr>	
						<td>E-mail Address: </td>
						<td>
							<input type="text" name="email_address" size="50" value="<?php echo $stud->email_address ?>">
							<?php echo form_error('email_address');  ?>
						</td>
					</tr>
					<tr>	
						<td>College Address: </td>
						<td>
							<input type="text" name="college_address" size="80" value="<?php echo $stud->college_address ?>">
							<?php echo form_error('college_address');  ?>
						</td>
					</tr>
					<tr>	
						<td>Home Address: </td>
						<td>
							<input type="text" name="home_address" size="80" value="<?php echo $stud->home_address ?>">
							<?php echo form_error('home_address');  ?>
						</td>
					</tr>
                    
                  
				</table>
				<br>
                <button type="submit"  class="pure-button">Update</button>
                  </form>
                  <?php endforeach; ?>
			</div>
		</center>
	</div>
</div>