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
<h1>Registration For Paitents</h1>
<br>
<br>
<form class="box" action="./psignup.php" method="post">
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
      <span class="details"> Age </span>
<input type="text" name="age" placeholder="Age">
    </div>

    <div class="input-box">
      <span class="details"> Gender </span>
        <select name="gender">
          <option value="Male"> Male </option>
          <option value="Female"> Female </option>
        </select>
    </div>

    <div class="input-box">
      <span class="details"> Height </span>
<input type="text" name="height" placeholder="Height">
    </div>

    <div class="input-box">
      <span class="details"> Weight </span>
<input type="text" name="weight" placeholder="Weight">
    </div>

    <div class="input-box">
      <span class="details"> E-Mail </span>
<input type="text" name="Email" placeholder="E-Mail">
    </div>

    <div class="input-box">
      <span class="details"> Password </span>
<input type="password" name="password" placeholder="Password">
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
