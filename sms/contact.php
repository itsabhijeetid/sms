<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['Contact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['number'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$message=$_POST['message'];

$msg=mysqli_query($con,"INSERT INTO contact(name,email,number,state, city, message) 
VALUES ('$name','$email','$mobile','$state','city','message')");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name = "viewport" content = "with=device-width,initial-scale = 1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contactstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class = "header_contact">
      <nav>
        <a href="logo.jpeg"><img src="logo.jpeg" alt=""></a>
        <div class="nav-links" id = "navLinks">
          <i class="fas fa-window-close" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="https://www.cuchd.in/international/undergraduate/#undergraduate"target="_blank">COURSE</a></li>
            
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        </nav>
         <section >
           <div class="contact">
           Dial Toll Free: <br>
           1800 XXXX XXXXX 
           </div>
           <fieldset class="card contact_field">
             <legend><h3>Message</h3></legend>
             <div style="margin-top: 1em; margin-left: 1em;">
             <form action="contactregistered.php" method="post">
          Name &emsp;<input type="name" name="name" placeholder="Enter your Name" required>
          Email &emsp;<input type="email" name="email" placeholder="Enter your Email Address" required>
          Mob no. &nbsp;<input type="number" name="number" placeholder="Enter your Mobile No" style="margin-left:-0.46em;" required>
          State &emsp;<input type="text" name="state" placeholder="Enter your State Name" style="margin-left: 0.69em;"><br>
          City &emsp;<input type="text" name="city" placeholder="Enter your City Name"style="margin-left:1.2em;">
          <textarea type="text" cols="50" rows="7" name="message"placeholder="Write your Message"></textarea>
          </div>
           </fieldset>
           <button>Send</button>
         </section>
        <div class="map">>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3742.326385819206!2d76.5747725353154!3d30.768475736386442!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68591e334d17a988!2sChandigarh%20University!5e0!3m2!1sen!2sin!4v1625672815586!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
    </section>      
        
</body>
</html>