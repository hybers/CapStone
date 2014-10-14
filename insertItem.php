<?php
$con=mysqli_connect("student.cs.appstate.edu","lancastermc","900471738","lancastermc");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$day_added = mysqli_real_escape_string($con, $_POST['day_added']);
$amount = mysqli_real_escape_string($con, $_POST['amount']);
$userID = mysqli_real_escape_string($con, $_POST['userID']);

$sql="INSERT INTO item (name, day_added, amount, userID)
VALUES ('$name', '$day_added', '$amount', '$userID')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?> 