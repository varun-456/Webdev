<?php
$conn = mysqli_connect("localhost","root","lahtp_b3");
$un = $_POST['uname'];
$pwd =$_POST['pwd'];

if(!$conn)
{
   die("Connection failed:".mysqli_connect_error());
}
$sql ="select * from Sample where username='$un' and password='$pwd'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count == 1)
     echo"<h3>Successfully Entered</h3>";
else
   echo"<h3>Invalid User</h3>";
mysqli_close($conn);