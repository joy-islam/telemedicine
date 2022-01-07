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

     <center><h1>View Patient Page</h1></center>
     <table class="motable" align="center">
       <thead>
         <tr>
           <th>Id</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Name</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Password</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Gender</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Gender</th>
             <th style="width: 15.3%; vertical-align: top;">
           <th>Age</th>
             <th style="width: 15.3%; vertical-align: top;">
                  <th>Weight</th>
                    <th style="width: 15.3%; vertical-align: top;">
                 <th>Height</th>
                   <th style="width: 15.3%; vertical-align: top;">
                <th>Address</th>
                  <th style="width: 15.3%; vertical-align: top;">
                <th>Phone</th>
                  <th style="width: 15.3%; vertical-align: top;">
              <th>Registration Date</th>
                <th style="width: 15.3%; vertical-align: top;">

           <th></th>
           <th></th>
         </tr>
       </thead>
      <?php
        include("connect.php");
        $view_patient="select * from patient";
        $view_query = mysqli_query($conn, $view_patient);
        while ($rows=mysqli_fetch_array($view_query)) {
          $patient_id = $rows[0];

          $patient_Name = $rows[2];

          $patient_password = $rows[3];

          $patient_gen=$rows[4];

          $age=$rows[5];
  $weight = $rows[6];
          $height = $rows[7];


          $address = $rows[8];

          $phone = $rows[9];

            $registration = $rows[11];


          ?>
          <tbody>

          <tr>
            <td><?php echo     $patient_id?></td>
              <th style="width: 15.3%; vertical-align: top;">

            <td><?php echo  $patient_Name ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo  $patient_password?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo $patient_gen ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo     $age?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo    $weight  ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo     $height  ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo     $address ?></td>
  <th style="width: 15.3%; vertical-align: top;">


    <td><?php echo     $phone ?></td>
  <th style="width: 15.3%; vertical-align: top;">
            <td><?php echo    $registration ?></td>

  <th style="width: 15.3%; vertical-align: top;">

            <td> <a href="./pdelete.php?id=<?php echo $patient_id  ?>"> <button onclick="return confirm('Are you sure To Delete this User?')"> Delete </button> </a> </td>

<th style="width: 5.3%; vertical-align: top;">
<a href="viewusers.php">Admin Dashboard</a>
          </tr>

        </tbody>
          <?php
        }
       ?>
     </table>

   </body>
 </html>
