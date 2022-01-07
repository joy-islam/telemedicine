<?php
include("connect.php");
$wuser= $_GET['id'];
$user_query="select * from doctor where Id='$wuser'";
$sql=mysqli_query($conn,$user_query);
$row=mysqli_fetch_assoc($sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="profile.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <center><h2>Update your profile Here</h2></center>

<center>
  <br><br><br>
<form class="box" action="./dupdatedprofile.php" method="post">
Your Profile Name: <br> <input type="text" name="Username" value="<?=$row['Name']; ?>"><br>
Your Password: <br> <input type="text" name="Pass" value="<?=$row['password']; ?>"><br>
Your Bmdc Number: <br> <input type="text" name="Bmdc" value="<?=$row['Bmdc']; ?>"><br>
Your Gender: <br> <input type="text" name="Gender" value="<?=$row['Gender']; ?>"><br>
Your Email: <br> <input type="email" name="Email" value="<?=$row['Email'];?>"><br>
Your Department: <br> <input type="text" name="Dept" value="<?=$row['Dept']; ?>"><br>
Your Address: <br> <input type="text" name="Add" value="<?=$row['Address']; ?>"><br>
Your Bio: <br> <input type="text" name="Bio" value="<?=$row['Bio']; ?>"><br>
Your Phone Number: <br>  <input type="varchar" name="Phone" value="<?=$row['Phone'];?>"><br>
Your Appointment Time: <br> <input type="text" name="A.time" value="<?=$row['Appointment']; ?>"><br>
Your Fee: <br> <input type="text" name="Fee" value="<?=$row['fee']; ?>"><br>

<input type="submit" name="Click" value="Update">
</center>
</form>
</body>
</html>
