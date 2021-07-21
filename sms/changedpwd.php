<?php
session_start();
require_once('dbconnection.php');
	$uid=$_SESSION['id'];
	$newpwd=$_POST['pwd'];
	  
$sql=mysqli_query($con,"UPDATE users SET password='$newpwd' WHERE id='$uid'");



if($sql)
{
echo "<script>alert('Password changed SUCCUSSULLY.');</script>";
}

?>

		


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="deletestyles.css">
  </head>
  <body>
    <section class = "navbar">
     
      <div class="nav-links">

        <ul >
        
        </ul>

      </div>


    </section>
    <section>
      <div class="upperheading">

      <h1>Password Changed Successfully</h1>
	  <h3><a href="logout.php">Click here to go to Home page</a></h3>
      <br>

      </div>
      		<div></div>
    </section>
  </body>
</html>
