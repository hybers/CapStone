<?php
$con=mysqli_connect("student.cs.appstate.edu","lancastermc","900471738","lancastermc");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$userID = mysqli_real_escape_string($con, $_POST['userID']);

$sql="INSERT INTO user (first_name, last_name, userID)
VALUES ('$first_name', '$last_name', '$userID')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?> 