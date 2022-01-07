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
      <div class="boddy">
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
          <th>Bmdc</th>
            <th style="width: 15.3%; vertical-align: top;">
            <th>Gender</th>
              <th style="width: 15.3%; vertical-align: top;">
          <th>E-Mail</th>
            <th style="width: 15.3%; vertical-align: top;">
          <th>Department</th>
            <th style="width: 15.3%; vertical-align: top;">
          <th>Address</th>
            <th style="width: 15.3%; vertical-align: top;">
          <th>Phone-Number</th>
            <th style="width: 15.3%; vertical-align: top;">
            <th>Appointment Time</th>
                <th style="width: 15.3%; vertical-align: top;">
                <th>Fees</th>
                <th style="width: 15.3%; vertical-align: top;">
                <th>Bio</th>
                <th style="width: 15.3%; vertical-align: top;">
          <th></th>
          </tr>
        </thead>
        <center>


  <?php
  include("connect.php");
  $currentuser=$_SESSION['email'];

  $viewinfo="select * from doctor where Email='$currentuser'";
  $sql=mysqli_query($conn,$viewinfo);
  if($row=mysqli_fetch_array($sql)){
    $doctor_id = $row[0];
  $Name=$row[1];
  $Password=$row[2];
  $Bmdc=$row[3];
  $Gender=$row[4];
  $Email=$row[5];
  $Department=$row[6];
  $Address=$row[7];
  $Bio=$row[8];
  $PhoneNumber=$row[9];
  $Appointment_time=$row[11];
  $Fees= $row[12];
  }
   ?>
   <tbody>

   <tr>
<h1>
   <td><?php echo $Name;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
   <td><?php echo $Password;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
   <td><?php echo $Bmdc;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
   <td><?php echo   $Gender;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
    <td><?php echo  $Email;  ?></td>
      <th style="width: 15.3%; vertical-align: top;">
     <td><?php echo   $Department;  ?></td>
       <th style="width: 15.3%; vertical-align: top;">
      <td><?php echo   $Address;  ?></td>
        <th style="width: 15.3%; vertical-align: top;">
        <td><?php echo   $PhoneNumber;  ?></td>
          <th style="width: 15.3%; vertical-align: top;">
         <td><?php echo   $Appointment_time;  ?></td>
           <th style="width: 15.3%; vertical-align: top;">
          <td><?php echo   $Fees;  ?></td>
          <th style="width: 15.3%; vertical-align: top;">
         <td><?php echo   $Bio;  ?></td>
   <td>

     <br>
     <br>
     <a href="./dupdateprofile.php?id=<?php echo $doctor_id;?>">Click Here To Edit</a>
   </td>

   </tr>
   </tbody>
     </table>

 <a href="doctorprofile.php">Profile</a>
         <a href="./logout.php">Logout</a>
         </div>
    </body>
  </html>
