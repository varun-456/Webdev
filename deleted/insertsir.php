<?php
// Create connection
$conn = new mysqli("localhost", "root", "", lahtp_b3);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$un=$_POST['uname'];
$pd=$_POST['pwd'];

$sql = "INSERT INTO sample (username,password)
VALUES ('$un','$pd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>