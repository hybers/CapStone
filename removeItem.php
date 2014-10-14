<?php
$con=mysqli_connect("student.cs.appstate.edu","lancastermc","900471738","lancastermc");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name = mysqli_real_escape_string($con, $_POST['name']);
$userID = mysqli_real_escape_string($con, $_POST['userID']);
mysqli_query($con,"DELETE FROM item WHERE name='$name' AND userID= '$userID' ");

mysqli_close($con);
?> 