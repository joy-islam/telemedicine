<?php
include("connect.php");
$doc= $_GET['name'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="registration.css">
    <title>Registration For Paitents</title>
  </head>
  <body>
<center>
  <div class="container">
<h1>Book Your Appointment</h1>
<br>
<br>
<form class="box" action="after_booking.php" method="post">
  <div class="user">

    <div class="input-box">
      <span class="details"> Full-Name </span>
<input type="text" name="fullname" placeholder="Full-Name">
    </div>

    <div class="input-box">
      <span class="details"> Phone-Number </span>
<input type="text" name="Phone-Number" placeholder="Phone-Number">
    </div>

    <div class="input-box">
      <span class="details"> E-Mail </span>
<input type="text" name="Email" placeholder="E-Mail">
    </div>

    <div class="input-box">
      <span class="details"> Doctor Name </span>
<input type="text" name="docname" value="<?php echo $doc ?>">
    </div>
    <div class="input-box">
      <span class="details"> Appointment Days</span>
        <select name="appdays">
          <option value="Saturday"> Saturday </option>
          <option value="Sunday"> Sunday </option>
          <option value="Monday"> Monday </option>
          <option value="Tuesday"> Tuesday </option>
          <option value="Wednesday"> Wednesday </option>
          <option value="Thursday"> Thursday </option>
        </select>
    </div>

    <div class="input-box">
      <span class="details"> Date </span>
    <input type="date" name="datee" >
    </div>

    <div class="input-box">
      <span class="details"> Tell Your Problem </span>
<textarea name="prob" rows="4" placeholder="Tell Your Problem" cols="35"> </textarea>
    </div>
    <div class="input-box">
      <span class="details"> Transction Number </span>
<input type="text" name="fee" placeholder="Fee">
    </div>
    <a href="image.php">Click Here To See The Payment Process</a>

    <div class="button">
      <input type="submit" name="registration" value="Book Now">
    </div>

  </div>

</form>
<br>
<a href="./patientdashbord.php">Home Page</a>
  </div>
</center>
  </body>
</html>
