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

  <div class="pro"> <h1 style="text-align: center; font-family: Arial;">PROFILE</h1>
    <h2 style="text-align: center; font-family: cursive;font-weight: normal;"></h2>
      <hr>
 </div>
    <table style="width:100%; text-align: center">
        <tr>
            <td>
              <div class="navbar">
<ul>
            <li>  <h3><a href=docdashboard.php>home</a></h3></li>

    <li>  <h3><a href=form.php>Prescription</a></h3></li>

                <li><h3><a href=deditprofile.php>Edit profile</a></h3></li>
                                <li><h3><a href=drsignin.php>Signout</a></h3></li>
</ul>
                  </div>

    </table>
    <hr>
    <table>
        <tr>




  <center> <h2>Details</h2></center>
    <tr>


            <th>Name</th>
            <th style="width: 15.3%; vertical-align: top;">
            <th>Phone_Number</th>
            <th style="width: 15.3%; vertical-align: top;">
  <th>Department</th>
  <th style="width: 15.3%; vertical-align: top;">
        <th>Appointment</th>
        <th style="width: 15.3%; vertical-align: top;">
        <th>Fees</th>
        <th style="width: 15.3%; vertical-align: top;">
                  <th>About</th>
            </th>
        </tr>
        <?php
        $demail=$_SESSION['email'];
        include('./connect.php');
        $view_movie="select * from doctor where Email= '$demail'";
        $run=mysqli_query($conn,$view_movie);
        while($row=mysqli_fetch_array($run)) {
            $Name = $row[1];
            $PhoneNumber = $row[9];
            $department = $row[6];
            $Appoinment = $row[11];
            $fees = $row[12];
            $bio = $row[8];
            ?>
            <tbody>

            <tr>
              <td><?php echo $Name  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo $PhoneNumber ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo $department ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo   $Appoinment  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo   $fees  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo   $bio  ?></td>
              <?php
            }
           ?>
    </table>
    <hr>
    <p>

</center>


      </div>
</center>
</body>

</html>
