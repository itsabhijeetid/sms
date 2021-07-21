<html>
<body>



<?php
session_start();
require_once('dbconnection.php');
	$admno=$_POST['admno'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
$sql=mysqli_query($con,"select admno from students_record where admno='$admno'");
$row=mysqli_num_rows($sql);


if($row>0)
{
echo "<script>alert('User account all ready exists.');</script>";


} else{ 

$sql11=mysqli_query($con,"INSERT INTO students_record (admno,fname,lname,email,gender,contact,state,city,pincode	
) VALUES ('$admno','$fname','$lname','$email','$gender','$contact','$state','$city','$pincode')");

if($sql11)
{
	echo "<script>alert('Register successfully');</script>";
}
}
?>
<li><a href="Register.php">Go back to Registration page</a></li><strong></strong>
</body>
</html>