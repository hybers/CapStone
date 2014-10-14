<?php
$con=mysqli_connect("student.cs.appstate.edu","lancastermc","900471738","lancastermc");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$result = mysqli_query($con, " select * from user");
 echo"<table border='1'>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>ID</th>
	</tr>";
	
while($row= mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>" . $row ['first_name'] . "</td>";
	echo "<td>" . $row['last_name'] . "</td>";
	echo "<td>" . $row['userID'] . "</td>";
	echo "</tr>";
}

echo"</table>";

mysqli_close($con);
?> 