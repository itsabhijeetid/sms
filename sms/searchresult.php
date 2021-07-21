<?php
session_start();
require_once('dbconnection.php');
	$admno=$_POST['admissionnumber'];
	echo $admno;
$sql=mysqli_query($con,"select * from students_record where admno='$admno'");
$row=mysqli_fetch_array($sql);

			if($row>0)
			{
				
				
							
				$fname=$row['fname'];
				$lname=$row['lname'];
				$email=$row['email'];
				$gender=$row['gender'];
				$contact=$row['contact'];
				$state=$row['state'];
				$city=$row['city'];
				$pincode=$row['pincode'];
				} 
				
			?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="searchresult.css">
    <style>
      td {
        width:100em;
      }
      tr {
        width:40em;
      }
      </style>
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
    <section>
      <div class="upperheading">


      <h1>Search Result</h1>
      <br>

      </div>
      <form class="searchform" action="index.html" method="post">
          <center>
		  <table border="2" color="white" width="1500px" height="200px" style="background-color:#0000009e;">
      <th>
 <tr align="center" >
    <td style="font-size:25px;">Admission Number</td>
    <td style="font-size:25px;">First name</td>
    <td style="font-size:25px;">Last name</td>
    <td style="font-size:25px;">Email</td>
	<td style="font-size:25px;">Gender</td>
    <td style="font-size:25px;">Contact No</td>
    <td style="font-size:25px;">State</td>
    <td style="font-size:25px;">City</td>
	<td style="font-size:25px;">Pin Code</td>
  </tr>
    </th>
  <tr  align="center" style="font-size:25px;">
    <td><?php echo $admno; ?></td>
    <td><?php echo $fname; ?></td>
	<td><?php echo $lname; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $gender; ?></td>
	<td><?php echo $contact; ?></td>
    <td><?php echo $state; ?></td>
    <td><?php echo $city; ?></td>
    <td><?php echo $pincode; ?></td>
  </tr>
  </table>
            </center>
      </form>
    </section>
  </body>
</html>
