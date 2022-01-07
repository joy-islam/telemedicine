<?php
include("connect.php");

if (isset($_POST['registration'])) {
  $email= $_POST['Email'];
  $user_name =$_POST['fullname'];
  $phnnum= $_POST['Phone-Number'];
  $docname=$_POST['docname'];
  $prob=$_POST['prob'];
  $fee=$_POST['fee'];
  $day=$_POST['appdays'];
  $date=date('Y-m-d',strtotime($_POST['datee']));
  echo $date;
  if($email  == '')
  {
    echo "<script>alert ('Please enter e-mail') </script>";
    echo "<script>window.open('./appoinment.php','_self') </script>";
    exit();
  }
if($user_name  == '')
{
  echo "<script>alert ('Please enter Full Name') </script>";
  echo "<script>window.open('./appoinment.php','_self') </script>";
  exit();
}

if($docname  == '')
{
  echo "<script>alert ('Please enter Your Doctor Name') </script>";
  echo "<script>window.open('./appoinment.php','_self') </script>";
  exit();
}
if($phnnum  == '')
{
  echo "<script>alert ('Please enter Phone Number') </script>";
  echo "<script>window.open('./appoinment.php','_self') </script>";
  exit();
}
if($day  == '')
{
  echo "<script>alert ('Please enter Day') </script>";
  echo "<script>window.open('./appoinment.php','_self') </script>";
  exit();
}

if($fee  == '')
{
  echo "<script>alert ('Please enter Fee') </script>";
  echo "<script>window.open('./appoinment.php','_self') </script>";
  exit();
}

$check_email = "select * from doctor where Name ='$docname'";
$result = mysqli_query($conn,$check_email );
if (!mysqli_num_rows($result)>0) {
    echo "<script>alert ('$docname Doesn't Exist....') </script>";
    echo "<script>window.open('./appoinment.php','_self') </script>";
    exit();

}
else {
  $insert_user = "insert into appoinment(email,name,docname,transction,phone,Day,Date,problem) value
  ('$email','$user_name','$docname','$fee','$phnnum','$day','$date','$prob')";
   if (mysqli_query($conn,$insert_user )) {
    echo "<script>window.open('index.php','_self') </script>";
   }
}
}

else {
  echo "<script>window.open('./appoinment.php','_self') </script>";
}?>
