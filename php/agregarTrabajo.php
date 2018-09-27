<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $dbconnect=mysqli_connect("localhost","root","trabajo");
    if (mysqli_connect_errno($dbconnect)){
      echo "failed";
    }else{
      echo "yup";
    }
    ?>
  </body>
</html>
