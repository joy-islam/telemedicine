<?php
session_start();
if (!isset($_SESSION['name'])) {
header("Location: ./adminlogin.php");
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">

     <link rel="stylesheet" href="./view_user.css">
     <title></title>
   </head>
   <body>

     <center><h1>View Doctor Page</h1></center>
     <table class="motable" align="center">
       <thead>
         <tr>
           <th>Id</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Name</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Password</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>BMDC</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Gender</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Department</th>
             <th style="width: 15.3%; vertical-align: top;">
                  <th>Adress</th>
                    <th style="width: 15.3%; vertical-align: top;">
                 <th>Bio</th>
                   <th style="width: 15.3%; vertical-align: top;">
                <th>Number</th>
                  <th style="width: 15.3%; vertical-align: top;">
                <th>Time</th>
                  <th style="width: 15.3%; vertical-align: top;">
              <th>Fees</th>
                <th style="width: 15.3%; vertical-align: top;">

           <th></th>
           <th></th>
         </tr>
       </thead>
      <?php
        include("connect.php");
        $view_users="select * from doctor";
        $view_query = mysqli_query($conn, $view_users);
        while ($rows=mysqli_fetch_array($view_query)) {
          $doctor_id = $rows[0];

          $doctor_Name = $rows[1];

          $doctor_password = $rows[2];

          $doctor_bmdc=$rows[3];

          $doctor_Gender=$rows[4];
  $doctor_email = $rows[5];
          $doctor_dept = $rows[6];


          $doctor_address = $rows[7];

          $doctor_bio = $rows[8];

            $doctor_num = $rows[9];

              $doctor_Appointment= $rows[11];

                $doctor_fee = $rows[12];

          ?>
          <tbody>

          <tr>
            <td><?php echo   $doctor_id ?></td>
              <th style="width: 15.3%; vertical-align: top;">

            <td><?php echo$doctor_Name ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo  $doctor_password ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo $doctor_bmdc ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo   $doctor_Gender ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo  $doctor_dept  ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo    $doctor_address  ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo   $doctor_bio  ?></td>
  <th style="width: 15.3%; vertical-align: top;">
      <td><?php echo   $doctor_num  ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo     $doctor_Appointment ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo    $doctor_fee   ?></td>
  <th style="width: 15.3%; vertical-align: top;">

            <td> <a href="./delete.php?id=<?php echo $doctor_id  ?>"> <button onclick="return confirm('Are you sure To Delete this Doctor?')"> Delete </button> </a> </td>
<a href="signin.php">Signout</a>
          </tr>

        </tbody>
          <?php
        }
       ?>
     </table>

   </body>
 </html>
