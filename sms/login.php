<?php
session_start();
require_once('dbconnection.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE username='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra1="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra1");
exit();
}
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name = "viewport" content = "with=device-width,initial-scale = 1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="loginstyles.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>
    <section class = "header">
      <nav>
        <a href="logo.jpeg"><img src="logo.jpeg" alt=""></a>
        <div class="nav-links" id = "navLinks">
          <i class="fas fa-window-close" onClick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="https://www.cuchd.in/international/undergraduate/#undergraduate" target="_blank">COURSE</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>

        </div>
        <i class="fas fa-bars" onClick="showMenu()"></i>

      </nav>
<center> <br><br>
  <div class="card " style="color: white;"> 
     <br><br><br><br><br><br><br><br><br>

     <fieldset>
    <legend><h2>Admin Login</h2></legend>
  
  <form name="login" action="" method="post">
							<div style="margin-top:3em; margin-bottom:3em;">	Username &emsp;<input type="text" class="text" name="uemail" value="" placeholder="Enter Username"  ><br/><a href="#" class=" icon email"></a>
              <br>
								Password &emsp;<input type="password" value="" name="password" placeholder="Enter  password"><a href="#" class=" icon lock"></a>
              </div>
								<div class="p-container">
								
									<div class="submit two">
									<!-- <input type="submit" name="login" value="LOG IN" class="btn" > -->
                  <button name="login">LOG IN</button>
									</div>
									<div class="clear"> </div>
</div>
							</form>
              </fieldset>
									 </div>
</center>

    </section>
  </body>
</html>
