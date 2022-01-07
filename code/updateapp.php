<?php
include("connect.php");
$status=$_POST['status'];
$puser= $_GET['id'];
$sql="update appoinment set status='$status' where ID ='$puser'";
$update_query=mysqli_query($conn,$sql);
if($update_query){
  header('Location:'.'docdashboard.php');

} else {
  echo 'TRY AGAIN';
}
?>
