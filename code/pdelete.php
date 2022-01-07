<?php
        include("connect.php");
$patient_id = $_GET['id'];
$pdelete_user = "delete from patient where Id = '$patient_id '";

$query = mysqli_query($conn,$pdelete_user );

if ($query) {
echo "<script>window.open('./viewpatient.php?del=Doctor Has been deleted ','_self')</script>";
}
?>
