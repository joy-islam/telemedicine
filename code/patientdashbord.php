<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: ./signin.php');
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title></title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
  </head>
  <body>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Medic</label>
        <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a class="active" href="./viewdoclogin.php"> Doctors </a></li>
          <li><a class="active" href="patientprofile.php">Profile</a> </li>
          <li><a class="active" href="logout.php">Log-out </a></li>

        </ul>
      </nav>
  </body>
</html>
