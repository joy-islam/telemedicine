    <link href="profile.css" rel="stylesheet"><?php
    include("connect.php");
    $Name=$_POST['Username'];
    $Password=$_POST['Pass'];
    $Bmdc=$_POST['Bmdc'];
    $Gender=$_POST['Gender'];
    $Email=$_POST['Email'];
    $Department=$_POST['Dept'];
    $Address=$_POST['Add'];
    $Bio=$_POST['Bio'];
    $PhoneNumber=$_POST['Phone'];
    $Appointment_time=$_POST['A.time'];
    $Fees=$_POST['Fee'];
        $bio=$_POST['Bio'];
    $wuser= $_GET['id'];
    $sql="update doctor set Name='$Name',password='$Password',Bmdc='$Bmdc',Gender='$Gender',Bio='$bio',Email='$Email',Dept='$Department', Address='$Address',Bio='$Bio',Phone='$PhoneNumber',Appointment='$Appointment_time',fee='$Fees' where Email='$Email'";
    $update_query=mysqli_query($conn,$sql);
    if($update_query){
      header('Location:'.'deditprofile.php');

    } else {
      echo 'TRY AGAIN';
    }
    ?>
