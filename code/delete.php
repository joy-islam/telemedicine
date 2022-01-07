<?php
        include("connect.php");
$doctor_id = $_GET['id'];
$delete_user = "delete from doctor where Id = '$doctor_id'";

$query = mysqli_query($conn,$delete_user );

if ($query) {
echo "<script>window.open('./viewDoctors.php?del=Doctor Has been deleted ','_self')</script>";
}
?>
