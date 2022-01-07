<?php
include("connect.php");

if (isset($_POST['registration'])) {
  $email= $_POST['Email'];
  $user_name =$_POST['fullname'];
  $password= $_POST['password'];
  $phnnum= $_POST['Phone-Number'];
  $gen=$_POST['gender'];
  $ag=$_POST['age'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  if($email  == '')
  {
    echo "<script>alert ('Please enter e-mail') </script>";
    echo "<script>window.open('./pRegistration.php','_self') </script>";
    exit();
  }
if($user_name  == '')
{
  echo "<script>alert ('Please enter Full Name') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}

if($password  == '')
{
  echo "<script>alert ('Please enter Password') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}
if($phnnum  == '')
{
  echo "<script>alert ('Please enter Phone Number') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}
if($gen == '')
{
  echo "<script>alert ('Please enter gender') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}
if($ag  == '')
{
  echo "<script>alert ('Please enter Age') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}
if($height  == '')
{
  echo "<script>alert ('Please enter Height') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}
if($weight  == '')
{
  echo "<script>alert ('Please enter weight') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}
$check_email = "select * from patient where Email ='$email'";
$result = mysqli_query($conn,$check_email );
if (mysqli_num_rows($result)>0) {
    echo "<script>alert ('Email $email Already Exist....') </script>";
    echo "<script>window.open('./pRegistration.php','_self') </script>";
    exit();

}
else {
  $insert_user = "insert into patient(Email,Name,password,Gender,Age,Weight,Height,Phone) value
  ('$email','$user_name','$password','$gen','$ag','$weight','$height','$phnnum')";
   if (mysqli_query($conn,$insert_user )) {
    echo "<script>window.open('signin.php','_self') </script>";
   }
}
}

else {
  echo "<script>window.open('./pRegistration.php','_self') </script>";
}?>
