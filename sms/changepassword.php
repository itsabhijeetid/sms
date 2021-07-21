<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="changestyles.css">
	<script>
function validateForm() {
  let x = document.forms["passform"]["pwd"].value;
  let y = document.forms["passform"]["cpwd"].value;
  let z = document.forms["passform"]["cpwd"].value;
  if (x == "") {
    alert("Please enter Current Password");
    return false;
  }
   if (y == "") {
    alert("Please enter new Password");
    return false;
  }
   if (z == "") {
    alert("Please enter new Password again");
    return false;
  }
  if (x != y) {
    alert("Password and Confirm Password must be same");
    return false;
  }
}
</script>
	
	
	
	
  </head>
  <body>
    <section class = "navbar">
    <a href="logo.jpeg"><img src="logo.jpeg" alt=""></a>
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


      <h1>Student Management System</h1>
      <br>

      </div>
      <form name="passform" class="searchform" action="changedpwd.php" onsubmit="return validateForm()" method="post">
        <fieldset class = "formfield">
          <legend style = "font-weight:800;font-size:35px">Change Password</legend>
          <center>
          <label>Current Password</label> <br>

          <input type="password" name="ppwd" value=""> <br>
          <label>New Password</label> <br>
          <input type="password" name="pwd" id="pwd" value="" > <br>
          <label>Confirm Password</label>
          <br>
          <input type="password" name="cpwd" id="cpwd"value=""> <br> <br>



          <input type="submit" name="submit" value="Confirm">
            </center>
        </fieldset>
      </form>
    </section>
  </body>
</html>
