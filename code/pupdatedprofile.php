<link href="profile.css" rel="stylesheet"><?php
include("connect.php");
$Name=$_POST['Username'];
$Email=$_POST['email'];
$Password=$_POST['Pass'];
$Gender=$_POST['gen'];
$Age=$_POST['age'];
$weight=$_POST['Weight'];
$height=$_POST['Height'];
$address=$_POST['Add'];
$phone=$_POST['Phone'];
$bio=$_POST['bio'];
$puser= $_GET['id'];
$sql="update patient set Name='$Name',Email='$Email',password='$Password',Gender='$Gender',Age='$Age',Weight='$weight', Height='$height', Address='$address',Phone='$phone',Bio='$bio' where Email='$Email'";
$update_query=mysqli_query($conn,$sql);
if($update_query){
  header('Location:'.'peditprofile.php');

} else {
  echo 'TRY AGAIN';
}
?>
