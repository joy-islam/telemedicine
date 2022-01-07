
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./viewdoc.css">
    <title>Doctors</title>
  </head>
  <body>
      <center><h1>Our Doctors</h1></center>
      <div class="filter">

      </div>
<table>
<thead>
  <tr>
    <th>Name</th>
      <th> Department</th>
        <th>Address</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Appoinment Time</th>
          <th>Appointment Day</th>
          <th>Bio</th>
  </tr>
</thead>

<?php
include('./connect.php');
$view_movie="select * from doctor";
$run=mysqli_query($conn,$view_movie);
while($row=mysqli_fetch_array($run)){
$doc_Id =$row[0];
$doc_name =$row[1];
$password =$row[2];
$BMDC =$row[3];
$gen =$row[4];
$email =$row[5];
$dept =$row[6];
$address =$row[7];
$bio =$row[8];
$phn =$row[9];
$pic =$row[10];
$app =$row[11];
$appday=$row[12];
$fee = $row[13];

?>
<tr>
<td><?php echo $doc_name;  ?></td>
<td><?php echo $dept;  ?></td>
<td><?php echo $address;  ?></td>
<td><?php echo $phn;  ?></td>
<td><?php echo $email;  ?></td>
<td><?php echo $app;  ?></td>
<td><?php echo $appday;  ?></td>
<td><?php echo $bio;  ?></td>

</tr>

<?php
}
?>
  </table>
  </body>
</html>
