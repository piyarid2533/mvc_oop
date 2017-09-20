<?php

	echo "<table border='1'>";
	echo "<tr> 
		<td>Roll</td>
		<td>Name</td>
		<td>Class</td>
		<td>Gender</td>
		</tr>";
	
	for($i=0;$i<count($students);$i++) {
		echo "<tr>";
		echo "<td>" . $students[$i]['Roll'] . "</td>";
		echo "<td>" . $students[$i]['Name'] . "</td>";
		echo "<td>" . $students[$i]['Class'] . "</td>";
		echo "<td>" . $students[$i]['Gender'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
?>