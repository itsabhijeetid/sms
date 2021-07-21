<html>
<body>



<?php
session_start();
require_once('dbconnection.php');
	
	$fname=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['number'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$message=$_POST['message'];

$sql11=mysqli_query($con,"INSERT INTO contact (name, email, number, state,city,message) VALUES ('$fname','$email','$contact','$state','$city','$message')");

if($sql11)
{
	echo "<script>alert('Your Request has been Registered. We will Contact you Soon');</script>";
}

?>
<li><a href="contact.php">Go back to Contact page</a></li><strong></strong>
</body>
</html>