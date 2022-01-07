<?php
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ./signin.php");
}
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link href="profile.css" rel="stylesheet">
      <title></title>
    </head>
    <body >
      <center>
      <h2>welcome <br> <?php echo $_SESSION['email'] ?></h2></center>
  <center>
      <table class="motable" cellspacing='15px' width=80%>
      <thead>
        <tr><center>
        <th> Name</th>
          <th style="width: 15.3%; vertical-align: top;">
        <th>Password</th>
          <th style="width: 15.3%; vertical-align: top;">
        <th>Gender</th>
          <th style="width: 15.3%; vertical-align: top;">
          <th>Email</th>
            <th style="width: 15.3%; vertical-align: top;">
        <th>Age</th>
          <th style="width: 15.3%; vertical-align: top;">

        <th>Height</th>
          <th style="width: 15.3%; vertical-align: top;">
        <th>Weight</th>
          <th style="width: 15.3%; vertical-align: top;">
        <th>Address</th>
          <th style="width: 15.3%; vertical-align: top;">
                      <th>Phone</th>
                        <th style="width: 15.3%; vertical-align: top;">
                      <th>Bio</th>

        <th></th>
        </tr>
      </thead>
      <center>
  <?php
  include("connect.php");
  $currentuser=$_SESSION['email'];

  $viewinfo="select * from patient where Email='$currentuser'";
  $sql=mysqli_query($conn,$viewinfo);
  if($row=mysqli_fetch_array($sql)){
  $patient_id = $row[0];
  $Email=$row[1];
  $Name=$row[2];
  $Password=$row[3];
  $Gender=$row[4];
  $Age=$row[5];
  $height=$row[7];
  $weight=$row[6];
  $address=$row[8];
  $phone=$row[9];
  $bio = $row[12];
  }
   ?>
   <tbody>

   <tr>
<h1>
   <td><?php echo $Name;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
   <td><?php echo $Password;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
   <td><?php echo $Gender;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
   <td><?php echo  $Email;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
    <td><?php echo  $Age;  ?></td>
      <th style="width: 15.3%; vertical-align: top;">
     <td><?php echo     $height;  ?></td>
       <th style="width: 15.3%; vertical-align: top;">
      <td><?php echo    $weight;  ?></td>
        <th style="width: 15.3%; vertical-align: top;">
       <td><?php echo   $address;  ?></td>
         <th style="width: 15.3%; vertical-align: top;">
        <td><?php echo     $phone;  ?></td>
        <th style="width: 15.3%; vertical-align: top;">
       <td><?php echo      $bio;  ?></td>


   <td>
     </h1>
     <br>
     <br>
     <a href="./pupdateprofile.php?id=<?php echo  $patient_id;?>">Click Here To Edit</a>
   </td>

   </tr>
   </tbody>
     </table>

 <a href="patientprofile.php">Profile</a>
         <a href="./logout.php">Logout</a>
    </body>
  </html>
