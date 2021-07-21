<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="deletestyles.css">
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


      <h1>Student Management System</h1>
      <br>

      </div>
      <form class="searchform" action="deleteresponse.php" method="post">
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
