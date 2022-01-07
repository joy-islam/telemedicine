<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="registration.css">
    <title>Doctor Registration</title>
  </head>
  <body>
<center>
  <div class="container">
<h1>Please Fill Up All The Information Correctly</h1>
<h2>Any Suspicious Account Will Be Deleted</h2>
<br>
<br>
<form class="box" action="dsignup.php" method="post">
  <div class="user">

    <div class="input-box">
      <span class="details"> Name </span>
<input type="text" name="name" placeholder="Your Name">
    </div>

    <div class="input-box">
      <span class="details"> E-Mail </span>
        <input type="text" name="Email" placeholder="E-Mail">
    </div>

    <div class="input-box">
      <span class="details">Phone-Number</span>
        <input type="text" name="Phone-Number" placeholder="Phone-Number">
    </div>

    <div class="input-box">
      <span class="details"> Gender </span>
        <select name="gender">
          <option value="Male"> Male </option>
          <option value="Female"> Female </option>
        </select>
    </div>

    <div class="input-box">
      <span class="details"> BMDC </span>
        <input type="text" name="bmdc" placeholder="BMDC">
    </div>

    <div class="input-box">
      <span class="details"> Address </span>
        <input type="text" name="address" placeholder="Address">
    </div>

    <div class="input-box">
      <span class="details"> Fee </span>
        <input type="text" name="fee" placeholder="Fee">
    </div>

    <div class="input-box">
      <span class="details"> Password</span>
      <input type="password" name="password" placeholder="Password">
    </div>
    <div class="input-box">
      <span class="details"> Appoinment Schedule </span>
      <input type="text" name="apptime" placeholder="Appoinment Schedule">
    </div>

    <div class="input-box">
      <span class="details"> Department </span>
        <select name="department">
          <option value="department"> Select your Department </option>
          <option value="Anesthetics"> Anesthetics </option>
          <option value="Cardiology"> Cardiology </option>
          <option value="Denstistry"> Denstistry </option>
          <option value="Dermatology"> Dermatology </option>
          <option value="Diabetes and Endocrinology"> Diabetes and Endocrinology </option>
          <option value="ENT"> Ear, Nose and Throat (ENT) </option>
          <option value="Gastroenterology"> Gastroenterology </option>
          <option value="General Surgery"> General Surgery </option>
          <option value="Gynecology"> Gynecology </option>
          <option value="Hematology"> Hematology </option>
          <option value="Internal Medicine"> Internal Medicine </option>
          <option value="Medicine"> Medicine </option>
          <option value="Neonatal Unit"> Neonatal Unit </option>
          <option value="Neurology"> Neurology </option>
          <option value="Nutrition"> Nutrition </option>
          <option value="Obstetrics and Gynecology"> Obstetrics and Gynecology </option>
          <option value="Oncology"> Oncology </option>
          <option value="Ophthalmology"> Ophthalmology </option>
          <option value="Orthopedics"> Orthopedics </option>
          <option value="Physiotherapy"> Physiotherapy </option>
          <option value="Renal Unit"> Renal Unit </option>
          <option value="Respiratory"> Respiratory and Chest Diseases </option>
          <option value="Sexual and Skin"> Sexual Health </option>
          <option value="Urology"> Urology </option>
        </select>
    </div>

    <div class="input-box">
      <span class="details"> Appointment Days</span>
        <select name="appdays">
          <option value="Saturday - Thursday"> Saturday - Thursday </option>
          <option value="Saturday - Wednesday"> Saturday - Wednesday </option>
          <option value="Saturday - Tuesday"> Saturday - Tuesday </option>
          <option value="Saturday - Monday"> Saturday - Monday </option>
          <option value="Sunday - Thursday"> Sunday - Thursday </option>
          <option value="Sunday - Wednesday"> Sunday - Wednesday </option>
          <option value="Sunday - Tuesday"> Sunday - Tuesday </option>
          <option value="Monday - Thursday"> Monday - Thursday </option>
          <option value="Monday - Wednesday"> Monday - Wednesday </option>
        </select>
    </div>

    <div class="button">
    <input type="submit" name="registration" value="Registration">
    </div>

</div>
</form>
<br>
<a href="./homepage.php">Home Page</a>
  </div>
</center>
  </body>
</html>
