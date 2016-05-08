<?php
$con=mysqli_connect("localhost","root","","my_db");

$repname = $_POST['reporter_name'];
$repmail = $_POST['reporter_email'];
$repres = $_POST['reason1'];

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO activeurl (name, email, reason) VALUES ('$repanme', '$repmail', '$repres')");

mysqli_close($con);
?>