<table>
		<thead>
			<tr>
				<th> Student Number </th>
				<th> Student Name</th>
			</tr>
		</thead>
		<?php
			$var = 0;
			foreach($grad_advisees as $row){
				 echo "<tr>";
				 echo "<td>".$row['student_number']."</td>\n";
				 echo "<td><a href=\"view_advisee/" . $row['student_number'] . "\">" .$row['last_name'] . ", " . $row['first_name'] ."</a></td>\n";
				 echo "</tr>";
				 $var++;
			}
		?>
</table>

<!-- div sa pagdisplay ng number of grads -->
<div>
<?php echo "<label>Total Graduates: " . $var . "</label>"; ?>
</div>