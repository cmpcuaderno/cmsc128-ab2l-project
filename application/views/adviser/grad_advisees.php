<table>
		<thead>
			<tr>
				<th> Student Number </th>
				<th> Student Name</th>
				<th> Classification</th>
			</tr>
		</thead>
		<?php
			foreach($grad_advisees as $row){
				 echo "<tr>";
				 echo "<td>".$row['student_number']."</td>\n";
				 echo "<td>".$row['last_name'] . ", " . $row['first_name'] ."</td>\n";
				 echo "<td>".$row['classification']."</td>\n";
				 echo "</tr>";
			}
		?>
</table>