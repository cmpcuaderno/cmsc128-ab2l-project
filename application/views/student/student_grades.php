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
			<table border="true" class="mq-table pure-table-bordered pure-table" width="60%">
				<thead>
					<tr>
						<td>
							Year Taken
						</td>
						<td>
							Term Taken
						</td>
						<td>
							Course Code
						</td>
						<td>
							Final Grade
						</td>
					</tr>
				</thead>
				<tbody>
			<?php 
			if($grades){
				foreach($grades as $sub) : ?>
				<tr>
					<td>
						<?php echo $sub->year_taken." - ".($sub->year_taken+1) ?>
					</td>
					<td>
						<?php echo $sub->term_taken ?>
					</td>
					<td>
						<?php echo $sub->course_code ?>
					</td>
					</td>
					<td>
						<?php echo $sub->final_grade ?>
					</td>
				</tr>
			<?php 
				endforeach;
			}else echo "No grades.<br><br>";
			?>
				</tbody>
			</table>
			<!-- end table for grades -->
		</center>
	</div>

</div>