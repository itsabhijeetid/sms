<?php
session_start();
require_once('dbconnection.php');
	$admno=$_POST['admissionnumber'];
	
$sql=mysqli_query($con,"delete from students_record where admno='$admno'");



if($sql)
{
echo "<script>alert('User account DELETED SUCCUSSULLY.');</script>";
}else{
echo "<script>alert('please enter correct admission number.');</script>";
}

?>
<li><a href="delete.php">Go back to Deletion page</a></li>
		


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
          <li><a href="dashboard.php">DASHBOARD</a></li>
          <li><a href="search.php">SEARCH STUD</a></li>
          <li><a href="delete.php">DELETE STUD A/C</a></li>
          <li><a href="changepassword.php">CHANGE PASSWORD</a></li>
          <li><a href="result.php">RESULT</a></li>
          <li><a href="logout.php">LOG OUT</a></li>

        </ul>

      </div>


    </section>
    <section>
      <div class="upperheading">


      <h1>Student Management System</h1>
      <br>

      </div>
      <form class="searchform" action="index.html" method="post">
        <fieldset class = "formfield">
          <legend style = "font-weight:800;font-size:35px;">Delete Student Account</legend>
          <center>
          <label>Admission Number</label>

          <input type="number" name="admissionnumber" value=""> <br>



          <input type="submit" name="submit" value="Delete">
            </center>
        </fieldset>
      </form>
    </section>
  </body>
</html>
