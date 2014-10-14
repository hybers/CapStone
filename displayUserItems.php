<?php
$con=mysqli_connect("student.cs.appstate.edu","lancastermc","900471738","lancastermc");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$ID = mysqli_real_escape_string($con, $_POST['userID']);


$result = mysqli_query($con, " select * from item where userID= '$ID'");
 echo"<table border='1'>
	<tr>
	<th>Name</th>
	<th>Day Added</th>
	<th>Amount</th>
	<th>User ID</th>
	</tr>";
	
while($row= mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>" . $row ['name'] . "</td>";
	echo "<td>" . $row['day_added'] . "</td>";
	echo "<td>" . $row['amount'] . "</td>";
	echo "<td>" . $row['userID'] . "</td>";
	echo "</tr>";
}

echo"</table>";

mysqli_close($con);
?> 