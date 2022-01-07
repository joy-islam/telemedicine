<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Prescription </title>
  </head>
  <body><br><br><br><br><br>
      <form action="pdf.php" method="post">
      <table border="0" bgcolor="#fff" align="center",cellspacing="20">
        <tr>
          <td>Patient Name</td>
          <td> <input type="text" placeholder="name" name="name"> </td>
        </tr>
        <tr>
          <td>Patient Email</td>
          <td> <input type="text" placeholder="email" name="email"> </td>
        </tr>
        <tr>
          <td>Patient Age</td>
          <td> <input type="text" placeholder="age" name="age" > </td>
        </tr>
        <tr>
          <td>Patient Weight</td>
          <td> <input type="text" placeholder="weight" name="weight"> </td>
        </tr>
        <tr>
          <td>Date</td>
          <td> <input type="date" placeholder="Date" name="date"> </td>
        </tr>
        <tr>
          <td>Write Precription </td>
        <td> <textarea name="prescription" rows="8" placeholder="prescription" cols="80"> </textarea></td>
              <tr>
        <center>  <td><input type="submit" id="button" name="submit"> </td></center>
        </tr>
      </table><br><br><br><br><br>


    </form>
  </body>
</html>
