<?php session_start();
require_once('dbconnection.php');




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Dash Board</title>
    <link rel="stylesheet" href="dashboard_style.css">
    <link rel="stylesheet" href="Register_style.css">
</head>

<body>
    <section class="navbar">
        <img src="logo.jpeg">
        <div class="nav-links">

            <ul>
                <li><a href="dashboard.php">DASHBOARD</a></li>
                <li><a href="Register.php">REGISTER STUDENT</a></li>
                <li><a href="search.php">SEARCH STUDENT</a></li>
                <li><a href="delete.php">DELETE STUDENT A/C</a></li>
                <li><a href="changepassword.php">CHANGE PASSWORD</a></li>
                <li><a href="logout.php">LOG OUT</a></li>


            </ul>

        </div>


    </section>
    <div class="upperheading">

        <a href="dashboard.php">
        <h1>Dashboard</h1></a>  
        </div>
        
    <div style="margin-top: 2em;">
        <table>
            <tr>
                <td><a href="Register.php">Register New Student</a></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><a href="search.php">Search Student</a></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><a href="delete.php">Delete Student Account</a></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><a href="changepassword.php">Change Password</a></td>
            </tr>
        </table>
        <table>
        <tr>
            <td class="logout_dash"><a href="logout.php">Log Out</a></td>
        </tr>
        </table>
    </div>
</body>

</html>