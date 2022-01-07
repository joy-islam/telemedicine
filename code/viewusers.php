<?php
session_start();
if (!isset($_SESSION['name'])) {
header("Location: ./adminlogin.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="profile.css" rel="stylesheet">
    <title>View User</title>
  </head>
  <body>
    <center>
      <h1>Click To Navigate The users</h1>
      <a href="viewDoctors.php">Doctors</a>
    
      <a href="viewpatient.php">Patient</a>

  </body>
</html>
