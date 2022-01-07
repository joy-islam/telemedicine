<?php
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ./signin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>

    <link href="table.css" rel="stylesheet">

</head>
<body>

  <div class="background">

  <div class="pro"> <h1 style="text-align: center; font-family: Arial;"> PROFILE</h1>
    <h2 style="text-align: center; font-family: cursive;font-weight: normal;"></h2>
      <hr>
 </div>
    <table style="width:100%; text-align: center">
        <tr>
            <td>
              <div class="navbar">
<ul>
            <li>  <h3><a href=patientdashbord.php>home</a></h3></li>



                <li><h3><a href=peditprofile.php>Edit profile</a></h3></li>


                <li><h3><a href=fileup.php>Upload File</a></h3></li>
                                <li><h3><a href=signin.php>Signout</a></h3></li>
</ul>
                  </div>

    </table>
    <hr>
    <table class="content-table">
        <tr>




  <center> <h2>Details</h2></center>
    <tr>


            <th>Name</th>
            <th style="width: 15.3%; vertical-align: top;">
            <th>Phone Number</th>
            <th style="width: 15.3%; vertical-align: top;">
  <th>Gender</th>
  <th style="width: 15.3%; vertical-align: top;">
        <th>Height</th>
        <th style="width: 15.3%; vertical-align: top;">
        <th>Registartion Date</th>
        <th style="width: 15.3%; vertical-align: top;">
          <th>About</th>
          <th style="width: 15.3%; vertical-align: top;">
            </th>
        </tr>
        <?php
        $pemail=$_SESSION['email'];
        include('./connect.php');
        $view_movie="select * from patient where Email= '$pemail'";
        $run=mysqli_query($conn,$view_movie);
        while($row=mysqli_fetch_array($run)) {
            $Name = $row[2];
            $PhoneNumber = $row[9];
            $gender = $row[4];
            $height = $row[7];
            $registration = $row[11];
            $bio = $row[12];
            ?>
            <tbody>

            <tr>
              <td><?php echo $Name  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo $PhoneNumber ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo  $gender ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo   $height  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo  $registration ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo   $bio  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <?php
            }
           ?>
    </table>
    <hr>
    <p>



      </div>
</center>
</body>

</html>
