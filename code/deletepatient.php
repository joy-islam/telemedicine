<?php
        include("connect.php");
$patient_id = $_GET['id'];
$pdelete_user = "delete from appoinment where ID = '$patient_id '";

$query = mysqli_query($conn,$pdelete_user );

if ($query) {
echo "<script>window.open('./docdashboard.php?del=Doctor Has been deleted ','_self')</script>";
}
?>
