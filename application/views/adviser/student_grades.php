<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('adviser/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/edit') ?>" class="pure-menu-link navLink" id="update">Update Specialization</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/change_password') ?>" class="pure-menu-link navLink" id="logs">Change Password</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/grad_advisees') ?>" class="pure-menu-link navLink" id="logs">View Graduate Advisees</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('adviser/advisees') ?>" class="pure-menu-link navLink" id="logs">View Advisees</a>
		</li>
	</ul>
</div>
	<div class="body-panel">
	<center>
		<a href="<?php echo site_url('adviser/view_advisee/'.$student_number.'') ?>" class="pure-button">Student Profile</a>
		<a href="<?php echo site_url('adviser/grades/'.$student_number.'') ?>" class="pure-button">Student Grades</a>
		<a href="<?php echo site_url('adviser/advisees') ?>" class="pure-button">Back to list</a>
	</center>
	<br><br>
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