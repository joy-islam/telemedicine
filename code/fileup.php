<?php
session_start();
if(!isset( $_SESSION['email'])){
header("location:./dlogin.php");
}
?>
<?php include 'filesLogic.php'?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fileup.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form class="" action="fileup.php" method="post" enctype="multipart/form-data">
          <h3>Upload Files</h3>
          <input type="file" name="myfile" value="">
          <button type="submit" name="save"> Upload </button>
        </form>
      </div>
      <div class="row">
        <table>
          <thead>
            <th>File</th>
            <th>Size</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php foreach ($files as $file ): ?>
              <tr>
                <td><?php echo $file['file'] ?></td>
                <td><?php echo $file['size'] ?></td>
                <td> <a href="fileup.php?file_id=<?php echo $file['ID']?>">Download</a> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
