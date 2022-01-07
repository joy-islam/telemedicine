<?php
session_start();
if(!isset( $_SESSION['email'])){
header("location:./dlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title></title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
  </head>
  <body>

    <div class="filter">

    </div>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Medic</label>
        <ul>
          <li><a class="active" href="doctorprofile.php">Profile</a></li>
          <li> <a class="active" href="index2.php"> Waiting Room</a></li>
          <li><a class="active" href="logout.php">Log-out </a></li>
        </ul>
      </nav>
<div class="header">
  <h3>Welcome <?php  echo $_SESSION['email']; ?></h3>
</div>
<table>
<thead>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Day</th>
    <th>Date</th>
    <th>Problem</th>
    <th>Delete</th>
  </tr>
</thead>

<?php
$demail=$_SESSION['email'];
include('./connect.php');
$view_movie="SELECT
    *
FROM
    appoinment a
        JOIN
    doctor d ON d.Name = a.docname
WHERE
    a.docname = (SELECT
            Name
        FROM
            telemedine.doctor
        WHERE
            Email = '$demail') order by date";
$run=mysqli_query($conn,$view_movie);
while($row=mysqli_fetch_array($run)){
$app_Id =$row[0];
$email =$row[1];
$name =$row[2];
$docname =$row[3];
$fee =$row[4];
$phone= $row[5];
$day=$row[6];
$date=$row[7];
$prob=$row[8];

?>
<tr>
<td><?php echo $name;  ?></td>
<td><?php echo $email;  ?></td>
<td><?php echo $phone;  ?></td>
<td><?php echo $day;  ?></td>
<td><?php echo $date;?></td>
<td><?php echo $prob;  ?></td>
<td><a href="./deletepatient.php?id=<?php echo $app_Id   ?>"> <button class="button" onclick="return confirm('Are you sure To Delete this Paitent?')"> <span class="button-text"> Delete </span>
<span class="icon"> <ion-icon name="cloud-delete-outline"> </span> </button></td>
</tr>
<?php
}
?>
  </table>
  </body>
</html>
