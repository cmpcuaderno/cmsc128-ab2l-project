	<div class="studentprofile">
		<?php 	foreach($student as $stud) : ?>
		<div class="pure-g">
			<div class="pure-u-1-3 l-box"><p>Name:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->last_name.','. $stud->first_name.' '.$stud->middle_name?></p></div>
			<div class="pure-u-1-3 l-box"><p>Student Number:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->student_number?></p></div>
			<div class="pure-u-1-3 l-box"><p>Classification:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->classification ?></p></div>
			<div class="pure-u-1-3 l-box"><p>Curriculum:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->curriculum ?></p></div>
			<div class="pure-u-1-3 l-box"><p>Contact Number:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->contact_number ?></p></div>
			<div class="pure-u-1-3 l-box"><p>Email Address:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->email_address ?></p></div>
			<div class="pure-u-1-3 l-box"><p>College Address:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->college_address ?></p></div>
			<div class="pure-u-1-3 l-box"><p>Home Address:</p></div>
			<div class="pure-u-2-3 l-box"><p><?php echo $stud->home_address ?></p></div>
		</div>
		<?php endforeach; ?>
		
		<div class="table-responsive">
        <table class="mq-table pure-table-bordered pure-table">
			<thead>
				<tr>
					<th class="highlight">Name</th>
					<th class="highlight">Duration</th>
				</tr>
			</thead>
			<tbody>
				<tr class="pure-table-odd">
					<td class="highlight">Mr. Leo Valdez</td>
					<td class="highlight">2014-present</td>
				</tr>
				<tr>
					<td class="highlight">Mr. Percy Jackson</td>
					<td class="highlight">2012-2014</td>
				</tr>
				<tr class="pure-table-odd">
					<td class="highlight">Ms. Annabeth Chase</td>
					<td class="highlight">2011-2012</td>
				</tr>
			</tbody>
		</table>
	</div>
