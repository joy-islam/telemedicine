<?php
if(!isset( $_SESSION['email'])){
header("location:./dlogin.php");
}
?>
<?php
$email=$_SESSION['email'];
  include("connect.php");

  $sql ="select * from files";
  $result = mysqli_query($conn,$sql);

  $files= mysqli_fetch_all($result, MYSQLI_ASSOC);

  if (isset($_POST['save'])) {
  $filename=$_FILES['myfile']['name'];
  $destination='uploads/' . $filename;
  $extension = pathinfo($filename,PATHINFO_EXTENSION);

  $file=$_FILES['myfile']['tmp_name'];

  $size = $_FILES['myfile']['size'];
  if(!in_array($extension,['jpg','png','pdf']))
  {
    echo "Your File Extension Must be .jpg, .png, .pdf";
  }
  elseif ($_FILES['myfile']['size']>1000000) {
    echo "file is too large";
  }
  else{
    if(move_uploaded_file($file,$destination))
    {
      $sql="insert into files(email,file,size)values('$email','$filename','$size')";
      if(mysqli_query($conn,$sql)){
        echo "<script>alert('File uploaded Successfully')</script>";
      }
      else{
          echo "<script>alert('Wrong File Extension .jpg, .png, .pdf Required')</script>";
          echo "<script>window.open('./fileup.php','_self') </script>";
      }
    }
  }
  }

  if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    $sql="select * from files where ID=$id ";
    $result= mysqli_query($conn,$sql);
    $file = mysqli_fetch_assoc($result);
    $filepath= 'uploads/' .$file['file'];

    if (file_exists($filepath)) {
      header('Content-Type: application/octet-stream');

      header('Content-Description: File Transfer');

      header('Content-Disposition: attachment; filename=' . basename($filepath));
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma:public');
      header('Content-Length' . filesize('uploads/'.$file['file']));
      readfile('uploads/' .$file['file']);
      exit;

    }
  }
 ?>
