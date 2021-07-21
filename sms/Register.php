<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['Register']))
{
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
	echo "<script>alert('Student's record allready available in the database.');</script>";
} else{  
	$msg=mysqli_query($con,"INSERT INTO students_record(admno,fname,lname,email) VALUES ('$admno','$fname','$lname','$email')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
}

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <link rel="stylesheet" href="Register_style.css">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
	<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
  </head>
  <body>
    <section class = "navbar">
      <img src="logo.jpeg">
      <div class="nav-links">

        <ul >
        <li><a href="dashboard.php">DASHBOARD</a></li>
                <li><a href="Register.php">REGISTER STUDENT</a></li>
                <li><a href="search.php">SEARCH STUDENT</a></li>
                <li><a href="delete.php">DELETE STUDENT A/C</a></li>
                <li><a href="changepassword.php">CHANGE PASSWORD</a></li>
                <li><a href="logout.php">LOG OUT</a></li>


        </ul>

      </div>


    </section>
    <section class="management">

  <div class="upperheading">


   <h1 class = "heading">Student Registration</h1>

      </div>
	  
	  
	  <form name="registration" method="post" action="registerresponse.php" enctype="multipart/form-data">
    <br>
        <fieldset class = "personal">
          <legend style = "font-weight:900;font-size:30px;"> Personal Info</legend>

          <label>Admission Number</label><br>
          <input type="number" name="admno" value="" required> <br><br>
		  <label>First Name</label> <br>
          <input type="text" value=""  name="fname" required ><br><br>
          <label>Last Name</label> <br>
		  <input type="text" value=""  name="lname"  ><br><br>
          <label>Email</label><br> 
          <input type="email" name="email" value="" required > <br>
                 <br>
             
          <label >Gender</label> &emsp;
          &emsp;<input type="radio" name="gender" value="male" >
          <label>Male</label> &emsp;&emsp;
          <input type="radio" name="gender" value="female">
          <label>Female</label> <br><br>
                  
          <label>Contact Number</label><br>
		   <input type="number" name="contact" value="" required> <br><br>
          <label>State</label> <br>
          <input type="text" name="state" value=""> <br><br>
          <label>City</label> <br>
          <input type="text" name="city" value=""> <br>
<br>
          <label>Pincode</label> <br>
          <input type="text" name="pincode" value="">         
          <div class="regimg"></div>
</fieldset>
<br> 
<center>

<input type="submit" name="  "  value="Register" > &emsp;&emsp;
<input type="reset" name="" value="Reset">
</centphp

        </form>



   </section>
  </body>
</html>
