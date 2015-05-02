<div class="pure-menu adminnav" id="cssmenu">
	<ul class="pure-menu-list custom-restricted-width">

        <li class="pure-menu-item pure-menu-selected">
            <a href="<?php echo site_url('student/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
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



<div class="body-panel pure-u-2-5 tableClass">
	<center>
		
		<table id="table" class="display" cellspacing="0" width="95%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Level</th>
					<th>Specialization</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach($query as $row ):
			?>
			<tr>
				<td> <?php echo $row->first_name." ".$row->middle_name." ".$row->last_name; ?></td>
				<td><?php echo $row->level; ?></td>
				<td><?php echo $row->specialization; ?></td>
			</tr>
			<?php
				endforeach;
			?>
			</tbody>
		</table>
		<br>
		
	</center>
</div>

