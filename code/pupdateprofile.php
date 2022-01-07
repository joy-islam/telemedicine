<?php
include("connect.php");
$puser= $_GET['id'];
$user_query="select * from patient where Id='$puser'";
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
<form class="box" action="./pupdatedprofile.php" method="post">
Your Profile Name: <br> <input type="text" name="Username" value="<?=$row['Name']; ?>"><br>
Your Password: <br> <input type="text" name="Pass" value="<?=$row['password']; ?>"><br>
Your Email: <br> <input type="text" name="email" value="<?=$row['Email']; ?>"><br>
Your Gender: <br> <input type="text" name="gen" value="<?=$row['Gender']; ?>"><br>
Your Age: <br> <input type="text" name="age" value="<?=$row['Age']; ?>"><br>
Your Weight: <br> <input type="text" name="Weight" value="<?=$row['Weight'];?>"><br>
Your Height: <br> <input type="height" name="Height" value="<?=$row['Height']; ?>"><br>
Your Address: <br> <input type="text" name="Add" value="<?=$row['Address']; ?>"><br>
Your Phone Number: <br>  <input type="varchar" name="Phone" value="<?=$row['Phone'];?>"><br>
Your Bio: <br>  <input type="text" name="bio" value="<?=$row['Bio'];?>"><br>


<input type="submit" name="Click" value="Update">
</center>
</form>
</body>
</html>
